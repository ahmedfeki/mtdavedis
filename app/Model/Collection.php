<?php
App::uses('AppModel', 'Model');
/**
 * Collection Model
 *
 * @property Fournisseur $Fournisseur
 * @property Categorie $Categorie
 * @property Editeur $Editeur
 */
class Collection extends AppModel {

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
		'Fournisseur' => array(
			'className' => 'Fournisseur',
			'foreignKey' => 'fournisseur_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categorie' => array(
			'className' => 'Categorie',
			'foreignKey' => 'categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Editeur' => array(
			'className' => 'Editeur',
			'foreignKey' => 'editeur_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
