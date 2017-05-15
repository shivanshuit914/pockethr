<?php

use App\User\User;
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
        User::withEmail($email);
    }

    /**
     * @When User try to login to the system with password :password
     */
    public function userTryToLoginToTheSystemWithPassword(string $password)
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
     * @Given A user with Email :email is already registered
     */
    public function aUserWithEmailIsAlreadyRegistered(string $email)
    {
        throw new PendingException();
    }

    /**
     * @When User try to register to the system with email :email and password :password
     */
    public function userTryToRegisterToTheSystemWithEmailAndPassword(string $email, string $password)
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
     * @Given A user with Email :email
     */
    public function aUserWithEmail(string $email)
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
