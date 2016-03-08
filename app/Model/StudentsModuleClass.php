<?php

App::uses('AppModel', 'Model');

/**
 * StudentsModuleClass Model
 *
 * @property Student $Student
 * @property ModuleClass $ModuleClass
 */
class StudentsModuleClass extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'student_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'module_class_id' => array(
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
        'Student' => array(
            'className' => 'Student',
            'foreignKey' => 'student_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ModuleClass' => array(
            'className' => 'ModuleClass',
            'foreignKey' => 'module_class_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
