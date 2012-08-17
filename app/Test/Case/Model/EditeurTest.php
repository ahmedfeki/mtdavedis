<?php
App::uses('Editeur', 'Model');

/**
 * Editeur Test Case
 *
 */
class EditeurTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.editeur'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Editeur = ClassRegistry::init('Editeur');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Editeur);

		parent::tearDown();
	}

}
