<?php
App::uses('AppModel', 'Model');
/**
 * History Model
 *
 */
class History extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'value' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
