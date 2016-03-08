<?php

App::uses('AppController', 'Controller');

/**
 * StudentNotifies Controller
 *
 * @property StudentNotify $StudentNotify
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentNotifiesController extends AppController {

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
            if (!empty($data['student_id'])) {
                $conditions['Student.STT LIKE'] = '%' . $data['student_id'] . '%';
            }
            if (!empty($data['student_name'])) {
                $conditions['Student.hoten LIKE'] = '%' . $data['student_name'] . '%';
            }
            if (!empty($data['content'])) {
                $conditions['StudentNotify.content LIKE'] = '%' . $data['content'] . '%';
            }
            if (isset($data['stage'])) {
                $conditions['StudentNotify.stage'] = $data['stage'];
            }
            if (!empty($data['danger']) && $data['danger']) {
                $conditions['TIMESTAMPDIFF(DAY,StudentNotify.created,NOW()) >='] = 5;
                $conditions['StudentNotify.stage'] = 0;
            }
            $this->request->data = array('StudentNotifies' => $data);
        }
        if (empty($conditions)) {
            $conditions = array();
        }
        $this->Paginator->settings = array(
            'conditions' => $conditions,
//            'order' => 'STT DESC',
            'limit' => 20,
            'paramType' => 'querystring',
        );
        $this->set('studentNotifies', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->StudentNotify->exists($id)) {
            throw new NotFoundException(__('Invalid student notify'));
        }
        $options = array('conditions' => array('StudentNotify.' . $this->StudentNotify->primaryKey => $id));
        $this->set('studentNotify', $this->StudentNotify->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        if ($id == null) {
            throw new NotFoundException;
        }
        if ($this->request->is('post')) {
            $this->StudentNotify->create();
            if ($this->StudentNotify->save($this->request->data)) {
                $this->Session->setFlash(__('The student notify has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student notify could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $student = $this->StudentNotify->Student->find('first', array(
            'conditions' => array(
                'Student.STT' => $id
            )
        ));
        $this->set(compact('student'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->StudentNotify->exists($id)) {
            throw new NotFoundException(__('Invalid student notify'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->StudentNotify->save($this->request->data)) {
                $this->Session->setFlash(__('The student notify has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student notify could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('StudentNotify.' . $this->StudentNotify->primaryKey => $id));
            $this->request->data = $this->StudentNotify->find('first', $options);
        }
        $students = $this->StudentNotify->Student->find('list');
        $this->set(compact('students'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->StudentNotify->id = $id;
        if (!$this->StudentNotify->exists()) {
            throw new NotFoundException(__('Invalid student notify'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->StudentNotify->delete()) {
            $this->Session->setFlash(__('The student notify has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The student notify could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function solved($id = null) {
        $this->autoRender = false;
        $this->StudentNotify->id = $id;
        if (!$this->StudentNotify->exists()) {
            throw new NotFoundException(__('Ghi chú không tồn tại'));
        }
//        $this->StudentNotify->stage = 1;
        $this->StudentNotify->saveField('stage', 1);
        return $this->redirect(array('action' => 'view', $id));
    }

}
