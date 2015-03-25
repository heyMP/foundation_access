Feature: View content
  In order to be able to read content
  As an anonymous user
  We need to be able to visit a page and view the content

  @api
  Scenario: As anonymous user visit a content page.
    Given I am an anonymous user
     When I go to the homepage
     Then I should get a "403" HTTP response
