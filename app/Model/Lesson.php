<?php

App::uses('AppModel', 'Model');

/**
 * Lesson Model
 *
 * @property ModuleClass $ModuleClass
 * @property Student $Student
 */
class Lesson extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
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
        'ngayhoc' => array(
            'datetime' => array(
                'rule' => array('date'),
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
        'ModuleClass' => array(
            'className' => 'ModuleClass',
            'foreignKey' => 'module_class_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Student' => array(
            'className' => 'Student',
            'joinTable' => 'lessons_students',
            'foreignKey' => 'lesson_id',
            'associationForeignKey' => 'student_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

}
