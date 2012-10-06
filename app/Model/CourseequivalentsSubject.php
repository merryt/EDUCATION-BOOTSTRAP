<?php
App::uses('AppModel', 'Model');
/**
 * CourseequivalentsSubject Model
 *
 * @property Subject $Subject
 * @property Courseequivalent $Courseequivalent
 */
class CourseequivalentsSubject extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'subject_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'courseequivalent_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Courseequivalent' => array(
			'className' => 'Courseequivalent',
			'foreignKey' => 'courseequivalent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
