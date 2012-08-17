<?php
/**
 * FournisseurFixture
 *
 */
class FournisseurFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adresse' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'paye_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ville_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'Responsable' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'fax' => array('type' => 'integer', 'null' => true, 'default' => null),
		'mail' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'siteweb' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'adresse' => 'Lorem ipsum dolor sit amet',
			'paye_id' => 1,
			'ville_id' => 1,
			'Responsable' => 'Lorem ipsum dolor sit amet',
			'tel' => 1,
			'fax' => 1,
			'mail' => 'Lorem ipsum dolor sit amet',
			'siteweb' => 'Lorem ipsum dolor sit amet'
		),
	);

}
