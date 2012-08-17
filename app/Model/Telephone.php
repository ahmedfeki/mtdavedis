<?php
App::uses('AppModel', 'Model');
/**
 * Telephone Model
 *
 * @property Client $Client
 * @property Fournisseur $Fournisseur
 * @property Commercial $Commercial
 */
class Telephone extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'telephone';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fournisseur' => array(
			'className' => 'Fournisseur',
			'foreignKey' => 'fournisseur_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Commercial' => array(
			'className' => 'Commercial',
			'foreignKey' => 'commercial_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
