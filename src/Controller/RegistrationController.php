<?php
// src/Controller/RegistrationController.php
namespace App\Controller;

// ...
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    public function registration(UserPasswordHasherInterface $passwordHasher): Response
    {
        // ... e.g. get the user data from a registration form
        $user = new User(...);
        $plaintextPassword = ...;

        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $passwordHasher->hashPassword(
        $user,
        $plaintextPassword
        );
        $user->setPassword($hashedPassword);

// ...
    }

    public function delete(UserPasswordHasherInterface $passwordHasher, UserInterface $user): void
    {
        // ... e.g. get the password from a "confirm deletion" dialog
        $plaintextPassword = ...;

        if (!$passwordHasher->isPasswordValid($user, $plaintextPassword)) {
        throw new AccessDeniedHttpException();
        }
    }
}
