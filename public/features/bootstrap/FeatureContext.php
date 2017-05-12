<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given User with Email :email
     */
    public function userWithEmail(string $email)
    {
        \App\User\User::withEmail($email);
    }

    /**
     * @When User try to login to the system with password :arg1
     */
    public function userTryToLoginToTheSystemWithPassword($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then User should not allow to login
     */
    public function userShouldNotAllowToLogin()
    {
        throw new PendingException();
    }

    /**
     * @Then User should allow to login
     */
    public function userShouldAllowToLogin()
    {
        throw new PendingException();
    }

    /**
     * @Given A user with Email :arg1 is already registered
     */
    public function aUserWithEmailIsAlreadyRegistered($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When User try to register to the system with email ":arg1 and password :arg2
     */
    public function userTryToRegisterToTheSystemWithEmailAndPassword($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then User should not allow to register
     */
    public function userShouldNotAllowToRegister()
    {
        throw new PendingException();
    }

    /**
     * @Given A user with Email :arg1
     */
    public function aUserWithEmail($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then User should allow to register
     */
    public function userShouldAllowToRegister()
    {
        throw new PendingException();
    }
}
