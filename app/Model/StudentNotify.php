<?php

App::uses('AppModel', 'Model');

/**
 * StudentNotify Model
 *
 * @property Student $Student
 */
class StudentNotify extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'student_notify';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'student_id';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'content' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
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
        'Student' => array(
            'className' => 'Student',
            'foreignKey' => 'student_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
