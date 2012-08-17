<?php
App::uses('AppModel', 'Model');
/**
 * Paye Model
 *
 * @property Fournisseur $Fournisseur
 * @property Ville $Ville
 */
class Paye extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Fournisseur' => array(
			'className' => 'Fournisseur',
			'foreignKey' => 'paye_id',
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
		'Ville' => array(
			'className' => 'Ville',
			'foreignKey' => 'paye_id',
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
