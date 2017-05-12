<?php

namespace spec\App\User;

use App\User\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWithEmail('test@test.com');
    }

    function it_exposes_email_address()
    {
        $this->getEmail()->shouldReturn('test@test.com');
    }
}
