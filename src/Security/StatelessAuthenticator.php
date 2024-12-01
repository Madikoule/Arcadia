<?php 


namespace App\Security;

use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class StatelessAuthenticator extends AbstractAuthenticator
{
    private UtilisateurRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(
        UtilisateurRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
    }

    public function supports(Request $request): bool
    {
        return $request->isMethod('POST') 
            && $request->getPathInfo() === '/connexion';
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');

        return new Passport(
            new UserBadge($email, function($userIdentifier) {
                $user = $this->userRepository->findByEmail($userIdentifier);
                if (!$user) {
                    throw new AuthenticationException('Email could not be found.');
                }
                return $user;
            }),
            new PasswordCredentials($password)
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Redirection après connexion réussie
        return new JsonResponse([
            'status' => 'success',
            'message' => 'Logged in successfully'
        ]);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new JsonResponse([
            'status' => 'error',
            'message' => $exception->getMessage()
        ], Response::HTTP_UNAUTHORIZED);
    }
}



