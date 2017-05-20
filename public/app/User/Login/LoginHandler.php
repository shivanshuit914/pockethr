<?php

namespace App\User\Login;

use App\User\User;
use App\User\UsersRepositoryInterface;

class LoginHandler
{
    /**
     * @var UsersRepositoryInterface
     */
    private $usersRepository;

    /**
     * LoginHandler constructor.
     * @param UsersRepositoryInterface $usersRepository
     */
    public function __construct(UsersRepositoryInterface $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * @param User $user
     * @param string $password
     *
     * @return bool
     */
    public function login(User $user, string $password)
    {
        if (!$this->usersRepository->findByEmail($user->getEmail())) {
            return false;
        }

        return true;
    }
}
