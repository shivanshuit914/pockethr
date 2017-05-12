Feature: Registration

  Scenario: Registered user should not allow to re-register
    Given A user with Email "user@test.com" is already registered
    When User try to register to the system with email ""user@test.com" and password "user123"
    Then User should not allow to register

  Scenario: Unregistered user should allow to register
    Given A user with Email "newuser@test.com"
    When User try to register to the system with email ""newuser@test.com" and password "newuser123"
    Then User should allow to register