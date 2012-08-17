<?php
App::uses('Contrat', 'Model');

/**
 * Contrat Test Case
 *
 */
class ContratTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contrat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contrat = ClassRegistry::init('Contrat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contrat);

		parent::tearDown();
	}

}
