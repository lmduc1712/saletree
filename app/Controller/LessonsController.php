<?php

App::uses('AppController', 'Controller');

/**
 * Lessons Controller
 *
 * @property Lesson $Lesson
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LessonsController extends AppController {

    public $uses = array('Lesson', 'Student', 'StudentsModuleClass', 'ModuleClass');

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        if (!empty($this->request->query)) {
            $data = $this->request->query;
            if (!empty($data['module_class_id'])) {
                $conditions['Lesson.module_class_id'] = $data['module_class_id'];
            }
            if (!empty($data['ngayhoc'])) {
                $conditions['Lesson.ngayhoc LIKE'] = '%' . $data['ngayhoc'] . '%';
            }
            $this->request->data = array('Lesson' => $data);
        }
        $conditions['Lesson.delete_flag'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'contain' => array('ModuleClass'),
            'conditions' => $conditions,
            'limit' => 20,
            'paramType' => 'querystring',
        );
        $classes = $this->ModuleClass->find('list', array(
            'recursive' => -1,
            'condition' => array(
                'delete_flag' => 0
            )
        ));
        $this->set(compact('classes'));
        $this->set('lessons', $this->Paginator->paginate());
    }

    /**
     * class index method
     *
     * @return void
     */
    public function class_index($module_class_id = null) {
        $class = $this->ModuleClass->find('first', array(
            'recursive' => -1,
            'contain' => 'User.name',
            'conditions' => array(
                'ModuleClass.id' => $module_class_id,
                'ModuleClass.delete_flag' => 0
            )
        ));
        if (empty($class)) {
            throw new NotFoundException();
        }
        $conditions['Lesson.delete_flag'] = 0;
        $conditions['Lesson.module_class_id'] = $module_class_id;

        $this->Paginator->settings = array(
//            'recursive' => 1,
            'contain' => 'ModuleClass',
            'conditions' => $conditions,
//            'order' => 'STT DESC',
            'limit' => 20,
            'paramType' => 'querystring',
        );

        $this->set('class', $class);
        $this->set('lessons', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Lesson->exists($id)) {
            throw new NotFoundException(__('Invalid lesson'));
        }
        $options = array('conditions' => array('Lesson.' . $this->Lesson->primaryKey => $id));
        $this->set('lesson', $this->Lesson->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        $class = $this->Lesson->ModuleClass->find('first', array(
            'recursive' => -1,
            'conditions' => array(
                'ModuleClass.id' => $id
            )
        ));
        if (empty($class)) {
            throw new NotFoundException();
        }
        $students = $this->StudentsModuleClass->find('all', array(
            'contain' => 'Student.hoten',
            'conditions' => array(
                'StudentsModuleClass.module_class_id' => $id
            )
        ));
        if ($this->request->is('post')) {
            $this->Lesson->create();
            if ($this->Lesson->saveAssociated($this->request->data, array('deep' => true))) {
                $this->Session->setFlash(__('Đã tạo nhật ký buổi học.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể tạo nhật ký buổi học. Hãy thử lại'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $moduleClasses = $this->Lesson->ModuleClass->find('list');
//        $students = $this->Lesson->Student->find('list');
        $this->set(compact('moduleClasses', 'students', 'class'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Lesson->exists($id)) {
            throw new NotFoundException(__('Invalid lesson'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Lesson']['backCount'] += 1;
            if ($this->Lesson->saveAll($this->request->data)) {
                $this->Session->setFlash(__('Đã cập nhật nhật ký.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'class_index', $this->request->data['ModuleClass']['id']));
            } else {
                $this->Session->setFlash(__('Không thể cập nhật nhật ký. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Lesson.' . $this->Lesson->primaryKey => $id));
            $this->request->data = $this->Lesson->find('first', $options);
            $this->request->data['Lesson']['backCount'] = 2;
        }
        $moduleClasses = $this->Lesson->ModuleClass->find('list');
//        $students = $this->Lesson->Student->find('list');
        $this->set(compact('moduleClasses', 'students'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if ($this->Auth->user('type') != 1 && $this->Auth->user('type') != 4) {
            throw new NotFoundException();
        }
        $this->autoRender = false;
        $this->Lesson->id = $id;
        if (!$this->Lesson->exists()) {
            throw new NotFoundException();
        }
        $lesson = array(
            'Lesson' => array(
                'id' => $id,
                'delete_flag' => 1
            )
        );
        if ($this->Lesson->save($lesson)) {
            $this->Session->setFlash(__('Đã xóa nhật ký.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('Không thể xóa nhật ký này. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
