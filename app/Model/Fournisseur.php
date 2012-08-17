<?php
App::uses('AppModel', 'Model');
/**
 * Fournisseur Model
 *
 * @property Paye $Paye
 * @property Ville $Ville
 * @property Collection $Collection
 * @property Telephone $Telephone
 */
class Fournisseur extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paye' => array(
			'className' => 'Paye',
			'foreignKey' => 'paye_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ville' => array(
			'className' => 'Ville',
			'foreignKey' => 'ville_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Collection' => array(
			'className' => 'Collection',
			'foreignKey' => 'fournisseur_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Telephone' => array(
			'className' => 'Telephone',
			'foreignKey' => 'fournisseur_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
