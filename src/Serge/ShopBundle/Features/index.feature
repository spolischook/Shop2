Feature: Product page
  In order to see all the product
  As a website user
  I need to be able to navigate the page

  @javascript
  Scenario: Navigation to a second product page
    Given I am on "product"
    When I follow "Next →"
    Then I should be on "product/2"
