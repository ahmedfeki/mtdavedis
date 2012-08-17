<?php
App::uses('AppModel', 'Model');
/**
 * Contrat Model
 *
 * @property Commercial $Commercial
 */
class Contrat extends AppModel {

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
		'Commercial' => array(
			'className' => 'Commercial',
			'foreignKey' => 'commercial_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
