<?php
App::uses('Typeimpaye', 'Model');

/**
 * Typeimpaye Test Case
 *
 */
class TypeimpayeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typeimpaye'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typeimpaye = ClassRegistry::init('Typeimpaye');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typeimpaye);

		parent::tearDown();
	}

}
