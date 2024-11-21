
<?php


namespace App\Tests\Security;


use PHPUnit\Framework\TestCase;
use App\Security\StatelessAuthenticator;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class StatelessAuthenticatorTest extends TestCase
{
    private $userRepository;
    private $passwordHasher;
    private $authenticator;

    protected function setUp(): void
    {
        $this->userRepository = $this->createMock(UtilisateurRepository::class);
        $this->passwordHasher = $this->createMock(UserPasswordHasherInterface::class);
        $this->authenticator = new StatelessAuthenticator($this->userRepository, $this->passwordHasher);
    }

    public function testAuthenticateWithInvalidEmail(): void
    {
        $request = new Request([], ['email' => 'invalid@example.com', 'password' => 'password']);

        $this->userRepository
            ->method('findByEmail')
            ->with('invalid@example.com')
            ->willReturn(null);

        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('No user found for email invalid@example.com');

        $this->authenticator->authenticate($request);
    }

    public function testAuthenticateWithInvalidPassword(): void
    {
        $user = $this->createMock(PasswordAuthenticatedUserInterface::class);
        $request = new Request([], ['email' => 'user@example.com', 'password' => 'wrong_password']);

        $this->userRepository
            ->method('findByEmail')
            ->with('user@example.com')
            ->willReturn($user);

        $this->passwordHasher
            ->method('isPasswordValid')
            ->with($user, 'wrong_password')
            ->willReturn(false);

        $this->expectException(AuthenticationException::class);
        $this->expectExceptionMessage('Invalid password.');

        $this->authenticator->authenticate($request);
    }

    public function testAuthenticateWithValidCredentials(): void
    {
        $user = $this->createMock(PasswordAuthenticatedUserInterface::class);
        $request = new Request([], ['email' => 'user@example.com', 'password' => 'correct_password']);

        $this->userRepository
            ->method('findByEmail')
            ->with('user@example.com')
            ->willReturn($user);

        $this->passwordHasher
            ->method('isPasswordValid')
            ->with($user, 'correct_password')
            ->willReturn(true);

        $passport = $this->authenticator->authenticate($request);

        $this->assertInstanceOf(Passport::class, $passport);
    }
}
