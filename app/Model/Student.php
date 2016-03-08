<?php

App::uses('AppModel', 'Model');

/**
 * Student Model
 *
 * @property Tuition $Tuition
 * @property Lesson $Lesson
 * @property ModuleClass $ModuleClass
 */
class Student extends AppModel {

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'STT';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'hoten';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'STT' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'hoten' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'dienthoai' => array(
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
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Tuition' => array(
            'className' => 'Tuition',
            'foreignKey' => 'student_id',
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

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Lesson' => array(
            'className' => 'Lesson',
            'joinTable' => 'lessons_students',
            'foreignKey' => 'student_id',
            'associationForeignKey' => 'lesson_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        ),
        'ModuleClass' => array(
            'className' => 'ModuleClass',
            'joinTable' => 'students_module_classes',
            'foreignKey' => 'student_id',
            'associationForeignKey' => 'module_class_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );
    
    public function hasRegisted($student) {
        if (empty($student) || empty($student['Student'])) {
            return array();
        }
        $findStudent = $this->find('first', array(
            'recursive' => -1,
            'conditions' => array(
                'hoten' => $student['Student']['hoten'],
                'dienthoai' => $student['Student']['dienthoai'],
                'email' => $student['Student']['email'],
                'student_flag' => 1,
            )
        ));
        return $findStudent;
    }

}
