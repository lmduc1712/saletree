<?php

App::uses('AppController', 'Controller');

/**
 * ModuleClasses Controller
 *
 * @property ModuleClass $ModuleClass
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ModuleClassesController extends AppController {

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
            if (!empty($data['tenlop'])) {
                $conditions['ModuleClass.tenlop LIKE'] = '%' . $data['tenlop'] . '%';
            }
            if (!empty($data['tengv'])) {
                $conditions['ModuleClass.tengv LIKE'] = '%' . $data['tengv'] . '%';
            }
            if (!empty($data['user_id'])) {
                $conditions['ModuleClass.user_id LIKE'] = '%' . $data['user_id'] . '%';
            }
            if (!empty($data['ngayhoc'])) {
                $conditions['ModuleClass.ngayhoc'] = $data['ngayhoc'];
            }
            if (!empty($data['cahoc'])) {
                $conditions['ModuleClass.cahoc'] = $data['cahoc'];
            }
            $this->request->data = array('ModuleClass' => $data);
        }
        $conditions['ModuleClass.delete_flag'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'contain' => array('User'),
            'conditions' => $conditions,
//            'order' => 'STT DESC',
            'limit' => 20,
            'paramType' => 'querystring',
        );
        $users = $this->ModuleClass->User->find('list', array(
            'conditions' => array(
                'User.delete_flag' => 0,
                'User.type' => 4
            )
        ));
        $this->set(compact('users'));
        $this->set('moduleClasses', $this->Paginator->paginate());
        switch ($this->Auth->user('type')) {
            case 4: 
                $this->render('trogiang_index');
                break;
        }
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ModuleClass->exists($id)) {
            throw new NotFoundException();
        }
        $options = array('conditions' => array('ModuleClass.' . $this->ModuleClass->primaryKey => $id));
        $this->set('moduleClass', $this->ModuleClass->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $users = $this->ModuleClass->User->find('list', array('conditions' => array('type' => 4)));
//        $students = $this->ModuleClass->Student->find('all');
        $students = array();
        if ($this->request->is('post')) {
            $this->ModuleClass->create();
            if ($this->ModuleClass->save($this->request->data)) {
                $this->Session->setFlash(__('Đã thêm lớp học mới.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể tạo lớp học. Vui lòng thử lại.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->ModuleClass->exists($id)) {
            throw new NotFoundException();
        }
        $students = array();
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['ModuleClass']['backCount'] += 1;
            if ($this->request->data['ModuleClass']['save'] == 1) {
                if ($this->ModuleClass->save($this->request->data)) {
                    $this->Session->setFlash(__('Thông tin lớp học đã được cập nhật.'), 'default', array('class' => 'alert alert-success'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Không thể cập nhật thông tin lớp học. Vui lòng thử lại.'), 'default', array('class' => 'alert alert-danger'));
                }
            } else {
                $data = $this->request->data['ModuleClass'];
                $conditions = array();
                if (!empty($data['hoten'])) {
                    $conditions['Student.hoten LIKE'] = '%' . $data['hoten'] . '%';
                }
                if (!empty($data['dienthoai'])) {
                    $conditions['Student.dienthoai LIKE'] = '%' . $data['dienthoai'] . '%';
                }
                if (!empty($data['email'])) {
                    $conditions['Student.email LIKE'] = '%' . $data['email'] . '%';
                }
                if (!empty($data['fromDate'])) {
                    $conditions['Student.date >='] = $data['fromDate'];
                }
                if (!empty($data['toDate'])) {
                    $conditions['Student.date <='] = $data['toDate'] . " 23:59:59";
                }
                if (!empty($data['l1'])) {
                    $conditions['Student.l1'] = $data['l1'];
                }
                if (!empty($data['l2'])) {
                    $conditions['Student.l2'] = $data['l2'];
                }
                if (!empty($data['l3'])) {
                    $conditions['Student.l3'] = $data['l3'];
                }
                if (!empty($data['l4'])) {
                    $conditions['Student.l4'] = $data['l4'];
                }
                if (!empty($data['l5'])) {
                    $conditions['Student.l5'] = $data['l5'];
                }
                if (!empty($data['l6'])) {
                    $conditions['Student.l6'] = $data['l6'];
                }
                if (!empty($data['l7'])) {
                    $conditions['Student.l7'] = $data['l7'];
                }
                if (!empty($data['l8'])) {
                    $conditions['Student.l8'] = $data['l8'];
                }
                if ($this->Auth->user('type') == 2) {
                    $conditions['Student.student_flag'] = 1;
                }
//                $conditions = array('date >=' => $this->request->data['ModuleClass']['date']);
                $students = $this->ModuleClass->Student->find('all', array('conditions' => $conditions));
                if (!empty($this->request->data['Student'])) {
//                    $ids = array();
//                    foreach ($this->request->data['Student']['Student'] as $studentSelected) {
//                        
//                    }
                    $studentInfo = $this->ModuleClass->Student->find('all', array(
                        'recursive' => -1,
                        'conditions' => array(
                            'Student.STT' => $this->request->data['Student']['Student']
                        )
                    ));
                }
                if (empty($studentInfo)) {
                    $studentInfo = array();
                }
                $this->set('studentInfo', $studentInfo);
            }
        } else {
            $options = array('conditions' => array('ModuleClass.' . $this->ModuleClass->primaryKey => $id));
            $this->request->data = $this->ModuleClass->find('first', $options);
            $this->request->data['ModuleClass']['backCount'] = 2;
        }
        $users = $this->ModuleClass->User->find('list', array('conditions' => array('type' => 4)));
        $this->set(compact('users', 'students'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if ($this->Auth->user('type') != 1) {
            throw new NotFoundException();
        }
        $this->autoRender = false;
        $this->ModuleClass->id = $id;
        if (!$this->ModuleClass->exists()) {
            throw new NotFoundException();
        }
        $moduleClass = array(
            'ModuleClass' => array(
                'id' => $id,
                'delete_flag' => 1
            )
        );
        if ($this->ModuleClass->save($moduleClass)) {
            $this->Session->setFlash(__('Đã xóa lớp học.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('Không thể xóa lớp học này. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
