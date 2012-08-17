<?php
App::uses('Moderegelement', 'Model');

/**
 * Moderegelement Test Case
 *
 */
class ModeregelementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.moderegelement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Moderegelement = ClassRegistry::init('Moderegelement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Moderegelement);

		parent::tearDown();
	}

}
