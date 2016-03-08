<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to logout.
        // Action Add will be removed when created enough users for systems.
        $this->Auth->allow('login', 'logout');
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * admin_index method
     *
     * @return void
     */
    public function index() {
        if ($this->Auth->user('type') != 1) {
            throw new NotFoundException('Đường dẫn này hiện không có.');
        }
        if (!empty($this->request->query)) {
            $data = $this->request->query;
            if (!empty($data['username'])) {
                $conditions['User.username LIKE'] = '%' . $data['username'] . '%';
            }
            if (!empty($data['name'])) {
                $conditions['User.name LIKE'] = '%' . $data['name'] . '%';
            }
            if (!empty($data['type'])) {
                $conditions['User.type LIKE'] = '%' . $data['type'] . '%';
            }
            $this->request->data = array('User' => $data);
        }
        $conditions['User.delete_flag'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'conditions' => $conditions,
            'limit' => 20,
            'paramType' => 'querystring',
        );
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if ($this->Auth->user('type') != 1) {
            throw new NotFoundException('Đường dẫn này hiện không có.');
        }
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function add() {
        if ($this->Auth->user('type') != 1) {
            throw new NotFoundException('Đường dẫn này hiện không có.');
        }
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Đã tạo người dùng mới.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể tạo người dùng mới. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if ($this->Auth->user('type') != 1) {
            throw new NotFoundException('Đường dẫn này hiện không có.');
        }
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['User']['backCount'] += 1;
            if (empty($this->request->data['User']['password'])) {
                unset($this->request->data['User']['password']);
            }
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Đã cập nhật thông tin người dùng.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể cập nhật dữ liệu. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
            $this->request->data['User']['backCount'] = 2;
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if ($this->Auth->user('type') != 1) {
            throw new NotFoundException('Đường dẫn này hiện không có.');
        }
        $this->autoRender = false;
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException();
        }
        $user = array(
            'User' => array(
                'id' => $id,
                'delete_flag' => 1
            )
        );
        if ($this->User->save($user)) {
            $this->Session->setFlash(__('Đã xóa người dùng.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('Không thể xóa người dùng này. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(
                        'Sai tên đăng nhập hoặc mật khẩu', 'default', array('class' => 'alert alert-danger')
                );
            }
        }

        if ($this->Auth->loggedIn()) {
            $this->redirect(array('controller' => 'users', 'action' => 'index'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function my_info() {
        $options = array(
            'conditions' => array(
                'User.' . $this->User->primaryKey => $this->Auth->user('id'),
                'delete_flag' => 0
        ));
        $user = $this->User->find('first', $options);
        if ($user['User']['id'] != $this->Auth->user('id')) {
            throw new NotFoundException();
        }
        $this->set('user', $user);
    }
    
    public function update_info() {
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['User']['backCount'] += 1;
            if (empty($this->request->data['User']['password'])) {
                unset($this->request->data['User']['password']);
            }
            unset($this->request->data['User']['type']);
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Đã cập nhật thông tin tài khoản.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'my_info'));
            } else {
                $this->Session->setFlash(__('Không thể cập nhật thông tin. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array(
                'User.' . $this->User->primaryKey => $this->Auth->user('id'),
                'delete_flag' => 0
            ));
            $this->request->data = $this->User->find('first', $options);
            $this->request->data['User']['backCount'] = 2;
        }
    }
}
