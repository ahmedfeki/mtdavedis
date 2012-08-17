<?php
/**
 * CollectionFixture
 *
 */
class CollectionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fournisseur_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'categorie_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'dateapparition' => array('type' => 'date', 'null' => true, 'default' => null),
		'prixvente' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '15,3'),
		'prixachat' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '15,3'),
		'composition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nbvolume' => array('type' => 'integer', 'null' => true, 'default' => null),
		'qte_stock_phys' => array('type' => 'integer', 'null' => true, 'default' => null),
		'stock_alert' => array('type' => 'integer', 'null' => true, 'default' => null),
		'qte_stock_theo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'editeur_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'fournisseur_id' => 1,
			'categorie_id' => 1,
			'dateapparition' => '2012-08-16',
			'prixvente' => 1,
			'prixachat' => 1,
			'composition' => 'Lorem ipsum dolor sit amet',
			'nbvolume' => 1,
			'qte_stock_phys' => 1,
			'stock_alert' => 1,
			'qte_stock_theo' => 1,
			'editeur_id' => 1
		),
	);

}
