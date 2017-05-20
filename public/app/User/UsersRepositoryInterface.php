<?php

namespace App\User;

interface UsersRepositoryInterface
{
    /**
     * @param string $email
     * @return mixed|null
     */
    public function findByEmail(string $email);
}