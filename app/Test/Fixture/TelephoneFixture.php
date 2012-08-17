<?php
/**
 * TelephoneFixture
 *
 */
class TelephoneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'telephone' => array('type' => 'integer', 'null' => true, 'default' => null),
		'client_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'fournisseur_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'commercial_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'telephone' => 1,
			'client_id' => 1,
			'fournisseur_id' => 1,
			'commercial_id' => 1
		),
	);

}
