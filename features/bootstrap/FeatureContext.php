<?php

use Behat\Behat\Context\ClosuredContextInterface,
	Behat\Behat\Context\TranslatedContextInterface,
	Behat\Behat\Context\BehatContext,
	Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
	Behat\Gherkin\Node\TableNode;


// Require 3rd-party libraries here:
require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';


/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
	private $output;

	/**
	 * Initializes context.
	 * Every scenario gets it's own context object.
	 *
	 * @param array $parameters context parameters (set them up through behat.yml)
	 */
	public function __construct(array $parameters)
	{
		// Initialize your context here
	}

	/**
	 * @Given /^There are packages:$/
	 */
	public function packages(TableNode $pkgs)
	{
		$rows = $pkgs->getRows();
		$head = array_shift($rows);

		foreach ($rows as $row) {
			$data = array_combine($head, $row);
			dump($data);
		}
	}

	/**
	 * @Then /^I should see "([^"]*)" in selector "([^"]*)"$/
	 */
	public function iShouldSeeInSelector($text, $selector)
	{
		dump($text, $selector);
	}

}