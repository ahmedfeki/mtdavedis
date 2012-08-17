<?php
App::uses('Typeregelement', 'Model');

/**
 * Typeregelement Test Case
 *
 */
class TyperegelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.typeregelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Typeregelement = ClassRegistry::init('Typeregelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Typeregelement);

		parent::tearDown();
	}

}
