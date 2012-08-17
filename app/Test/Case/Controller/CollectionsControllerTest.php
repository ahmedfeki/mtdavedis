<?php
App::uses('CollectionsController', 'Controller');

/**
 * TestCollectionsController *
 */
class TestCollectionsController extends CollectionsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * CollectionsController Test Case
 *
 */
class CollectionsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.collection', 'app.fournisseur', 'app.categorie', 'app.editeur');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Collections = new TestCollectionsController();
		$this->Collections->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Collections);

		parent::tearDown();
	}

}
