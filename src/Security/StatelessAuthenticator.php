<?php 

namespace App\Security;

use App\Repository\UtilisateurRepository;
use Symfony\Component\Security\Core\Authenticator\Passport\Passport;
use Symfony\Component\Security\Core\Authenticator\Passport\Badge\PasswordCredentials;
use Symfony\Component\Security\Core\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class StatelessAuthenticator extends AbstractAuthenticator
{
    private UtilisateurRepository $userRepository;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UtilisateurRepository $userRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
    }


    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $user = $this->userRepository->findByEmail($email);

        // Charger l'utilisateur à partir de son email
        if (!$user) {
            throw new AuthenticationException('No user found for email ' . $email);
        }

        // Vérification du mot de passe
        if (!$this->passwordHasher->isPasswordValid($user, $password)) {
            throw new AuthenticationException('Invalid password.');
        }

        // Création du Passport avec les informations nécessaires
        return new Passport($user, new PasswordCredentials($password), ['ROLE_USER']);
    }

    // Sur succès de l'authentification (stateless, on ne redirige pas)
}
