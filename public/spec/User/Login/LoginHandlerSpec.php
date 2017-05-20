<?php

namespace spec\App\User\Login;

use App\Repository\UsersRepository;
use App\User\Login\LoginHandler;
use App\User\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LoginHandlerSpec extends ObjectBehavior
{
    function let(UsersRepository $usersRepository)
    {
        $this->beConstructedWith($usersRepository);
    }

    function it_returns_false_when_authentications_fails(UsersRepository $usersRepository)
    {
        $user = User::withEmail('test@test.com');
        $usersRepository->findByEmail($user->getEmail())->willReturn(null);
        $this->login($user, 'password')->shouldReturn(false);
    }

    function it_returns_true_when_authentications_passes(UsersRepository $usersRepository)
    {
        $user = User::withEmail('test123@test.com');
        $usersRepository->findByEmail($user->getEmail())->willReturn($user);
        $this->login($user, 'password123')->shouldReturn(true);
    }

}
