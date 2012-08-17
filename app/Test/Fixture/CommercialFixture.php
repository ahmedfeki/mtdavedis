<?php
/**
 * CommercialFixture
 *
 */
class CommercialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'prenom' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adresse' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tel' => array('type' => 'integer', 'null' => true, 'default' => null),
		'date_embauche' => array('type' => 'date', 'null' => true, 'default' => null),
		'commercial_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'group_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'prenom' => 'Lorem ipsum dolor sit amet',
			'adresse' => 'Lorem ipsum dolor sit amet',
			'tel' => 1,
			'date_embauche' => '2012-08-17',
			'commercial_id' => 1,
			'group_id' => 1
		),
	);

}
