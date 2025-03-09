<?php

namespace App\Security;

use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;


class StatelessAuthenticator extends AbstractAuthenticator
{
    private UtilisateurRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;
    private RouterInterface $router;

    public function __construct(
        UtilisateurRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher,
        RouterInterface $router
    ) {
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
        $this->router = $router;
    }

    /* Vérifie si l'authentificateur doit être utilisé pour cette requête */
    public function supports(Request $request): bool
    {
        return $request->isMethod('POST') 
            && $request->getPathInfo() === '/connexion';
    }

    /* Récupère les informations de l'utilisateur et valide ses identifiants */
    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');

        if (empty($email) || empty($password)) {
            throw new AuthenticationException('Email and password cannot be empty.');
        }


        return new Passport(
            new UserBadge($email, function (string $userIdentifier) {
                $user = $this->userRepository->findOneBy(['email' => $userIdentifier]);
                if (!$user) {
                    throw new AuthenticationException('Invalid credentials.');
                }
                return $user;
            }),
            new PasswordCredentials($password)
        );
    }

    /* Action à effectuer en cas de succès d'authentification. */
    public function onAuthenticationSuccess(Request $request, $token, string $firewallName): ?Response
    {
        $user = $token->getUser();

        // Générer l'URL de redirection
        return new RedirectResponse($this->router->generate('app_dashboard'));


    }

    /* Action à effectuer en cas d'échec d'authentification */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Invalid credentials.',
        ], Response::HTTP_UNAUTHORIZED);
    }
}
