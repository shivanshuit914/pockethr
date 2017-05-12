<?php

namespace App\User;

class User
{
    /**
     * @var string
     */
    private $email;

    private function __construct(string $email)
    {
        $this->email = $email;
    }

    public static function withEmail(string $email) : User
    {
        return new static($email);
    }

    public function getEmail() : string
    {
        return $this->email;
    }
}
