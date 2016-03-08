<?php

App::uses('AppModel', 'Model');

/**
 * ModuleClass Model
 *
 * @property Trogiang $Trogiang
 * @property Lession $Lession
 * @property Student $Student
 */
class ModuleClass extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'tenlop';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'tenlop' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => '*Hãy điền tên lớp',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'ngayhoc' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => '*Hãy lựa chọn ngày học',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'cahoc' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => '*Hãy lựa chọn ca học',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'tengv' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => '*Hãy điền tên giáo viên',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'trogiang' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => '*Hãy điền tên trợ giảng',
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
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Lesson' => array(
            'className' => 'Lesson',
            'foreignKey' => 'module_class_id',
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
        'Student' => array(
            'className' => 'Student',
            'joinTable' => 'students_module_classes',
            'foreignKey' => 'module_class_id',
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
