Feature: Login

Scenario: Disallow not registered users to login
  Given User with Email "test@test.com"
  When User try to login to the system with password "test123"
  Then User should not allow to login