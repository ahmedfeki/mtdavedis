<?php
App::uses('Commercial', 'Model');

/**
 * Commercial Test Case
 *
 */
class CommercialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commercial',
		'app.group',
		'app.chef',
		'app.contrat',
		'app.telephone',
		'app.client',
		'app.reglement',
		'app.fournisseur',
		'app.paye',
		'app.ville',
		'app.collection',
		'app.categorie',
		'app.editeur'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commercial = ClassRegistry::init('Commercial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commercial);

		parent::tearDown();
	}

}
