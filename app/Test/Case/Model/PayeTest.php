<?php
App::uses('Paye', 'Model');

/**
 * Paye Test Case
 *
 */
class PayeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paye'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paye = ClassRegistry::init('Paye');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paye);

		parent::tearDown();
	}

}
