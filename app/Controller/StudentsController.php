<?php

App::uses('AppController', 'Controller');

/**
 * Students Controller
 *
 * @property Student $Student
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudentsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');
    public $helpers = array('PhpExcel');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        if (!empty($this->request->query)) {
            $data = $this->request->query;
            if (!empty($data['STT'])) {
                $conditions['Student.STT LIKE'] = '%' . $data['STT'] . '%';
            }
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
            $this->request->data = array('Student' => $data);
        }
        $conditions['Student.delete_flag'] = 0;
        $this->Paginator->settings = array(
//            'recursive' => 1,
            'contain' => 'ModuleClass',
            'conditions' => $conditions,
//            'order' => 'STT DESC',
            'limit' => 20,
            'paramType' => 'querystring',
        );
        $this->set('students', $this->Paginator->paginate());
        switch ($this->Auth->user('type')) {
            case 3:
                $this->render('sale_index');
                break;
            case 1:
            case 2:
            case 4:
            case 5:
            case 6:
                $this->render('sale_leader_index');
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
        if (!$this->Student->exists($id)) {
            throw new NotFoundException(__('Invalid student'));
        }
        $options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
        $student = $this->Student->find('first', $options);
        $this->set('student', $student);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Student->exists($id)) {
            throw new NotFoundException(__('Invalid student'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Student']['backCount'] += 1;
            if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash(__('The student has been saved.'), 'default', array('class' => 'alert alert-success'));
//                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The student could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
            $this->request->data = $this->Student->find('first', $options);
            $this->request->data['Student']['backCount'] = 2;
        }
        $classes = $this->Student->ModuleClass->find('list');
        $this->set(compact('classes'));
        switch ($this->Auth->user('type')) {
            case 2:
            case 3:
                $this->render('telesale_edit');
                break;
            case 5:
                $this->render('qlhv_edit');
                break;
            case 6:
                $this->render('kt_edit');
                break;
            case 1:
                $this->render('edit');
                break;
            default :
                throw new NotFoundException();
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Student->id = $id;
        if (!$this->Student->exists()) {
            throw new NotFoundException(__('Invalid student'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Student->delete()) {
            $this->Session->setFlash(__('The student has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The student could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * delete method not redirect
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    private function deleteOnly($id = null) {
        $this->Student->id = $id;
        if (!$this->Student->exists()) {
            return FALSE;
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Student->delete()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Student->create();
            if ($this->Student->save($this->request->data)) {
                $this->Session->setFlash(__('Đã tạo học viên mới.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể tạo học viên mới. Hãy thử lại.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $classes = $this->Student->ModuleClass->find('list');
        $this->set(compact('classes'));
    }

    public function checking_contact() {
        if ($this->request->is(array('post', 'put'))) {
            foreach ($this->data['Student']['STT'] as $key => $value) {
                if ($value != 0) {
                    $this->deleteOnly($value);
                }
//            debug($this->request->data);die;
            }
        }
        if (!empty($this->request->query)) {
            $data = $this->request->query;
            if (!empty($data['date'])) {
                $conditions['Student.date >='] = $data['date'] . ' 00:00:00';
                $conditions['Student.date <='] = $data['date'] . ' 23:59:59';
            }
            $this->request->data = array('Student' => $data);
        } else {
            $conditions['Student.date >='] = date('Y-m-d', strtotime('today')) . ' 00:00:00';
            $conditions['Student.date <='] = date('Y-m-d', strtotime('today')) . ' 23:59:59';
            $this->request->data = array('Student' => array('date' => date('Y-m-d', strtotime('today'))));
        }
        $conditions['Student.delete_flag'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'conditions' => $conditions,
//            'order' => 'STT DESC',
            'limit' => 100,
            'paramType' => 'querystring',
        );
        $students = $this->Paginator->paginate();
//            $stt= 1;
//            foreach ($students as $idx => $student) {
//                foreach ($students as $tmpID => $tmpStudent) {
//                    if ( $tmpID != $idx
//                            && $tmpStudent['Student']['hoten'] == $student['Student']['hoten']
//                            && $tmpStudent['Student']['email'] == $student['Student']['email']
//                            && $tmpStudent['Student']['dienthoai'] == $student['Student']['dienthoai']) {
//                        unset($students[$idx]);
//                    }
//                }
//            }
//            foreach ($students as $idx => $student) {
//                $oldRegisted = $this->Student->hasRegisted($student);
//                if (!empty($oldRegisted)) {
//                    $students[$idx]['Student']['sid'] = $oldRegisted['Student']['sid'];
//                    $students[$idx]['Student']['isRegisted'] = true;
//                } else {
//                    $students[$idx]['Student']['isRegisted'] = false;
//                    $students[$idx]['Student']['sid'] = date('Ymd', strtotime($students[$idx]['Student']['date'])) . str_pad($stt, 3, '0', STR_PAD_LEFT);
//                    $stt += 1;
//                }
//            }
        $this->set('students', $students);
    }

    public function loc_contact() {
        if ($this->request->is(array('post', 'put'))) {
            foreach ($this->data['Student']['STT'] as $key => $value) {
                if ($value != 0) {
                    $this->deleteOnly($value);
                }
//            debug($this->request->data);die;
            }
        }
        if (!empty($this->request->query)) {
            $data = $this->request->query;
            if (!empty($data['date'])) {
                $conditions['CURRENT_DATE() >='] =  'SYSDATE()-90';
            }
            $this->request->data = array('Student' => $data);
        }
        $conditions['Student.delete_flag'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'conditions' => $conditions,
//            'order' => 'STT DESC',
            'limit' => 100,
            'paramType' => 'querystring',
        );
        $students = $this->Paginator->paginate();
        $this->set('students', $students);
    }

    public function result_checking_contact($dateFilter = null) {
        if (!empty($dateFilter)) {
            $conditions['Student.date >='] = $dateFilter . ' 00:00:00';
            $conditions['Student.date <='] = $dateFilter . ' 23:59:59';
        } else {
            throw new NotFoundException();
        }
        $conditions['Student.delete_flag'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'conditions' => $conditions,
            'order' => 'STT ASC',
            'limit' => 1000,
            'paramType' => 'querystring',
        );
        $students = $this->Paginator->paginate();
        $stt = $this->Student->find('first', array(
            'recursive' => -1,
            'fields' => array('MAX(Student.sid) as maxsid'),
            'conditions' => $conditions,
        ));
        if (!empty($stt)) {
            $stt = $stt[0]['maxsid'] + 1;
        }
        $stt = substr($stt, 8);
//        $stt =1;
//        debug($stt);die;
        foreach ($students as $idx => $student) {
            foreach ($students as $tmpID => $tmpStudent) {
                if ($tmpID != $idx && $tmpStudent['Student']['hoten'] == $student['Student']['hoten'] && $tmpStudent['Student']['email'] == $student['Student']['email'] && $tmpStudent['Student']['dienthoai'] == $student['Student']['dienthoai']) {
                    unset($students[$idx]);
                }
            }
        }
        $validStudents = 0;
        $failStudents = 0;
        foreach ($students as $idx => $student) {
            if ($student['Student']['student_flag'] == 0) {
                $oldRegisted = $this->Student->hasRegisted($student);
                if (!empty($oldRegisted)) {
                    $students[$idx]['Student']['sid'] = $oldRegisted['Student']['sid'];
                    $students[$idx]['Student']['regStatus'] = false;
                    $failStudents += 1;
                } else {
                    $students[$idx]['Student']['regStatus'] = true;
                    $students[$idx]['Student']['sid'] = date('Ymd', strtotime($students[$idx]['Student']['date'])) . str_pad($stt, 3, '0', STR_PAD_LEFT);
                    $students[$idx]['Student']['student_flag'] = 1;
                    $stt += 1;
                    $validStudents += 1;
                }
            }
        }
        $this->Student->saveAll($students);
        $this->set(compact('students', 'validStudents', 'failStudents', 'dateFilter'));
    }

    public function export_checking_contact($dateFilter = null) {
        if (!empty($dateFilter)) {
            $conditions['Student.date >='] = $dateFilter . ' 00:00:00';
            $conditions['Student.date <='] = $dateFilter . ' 23:59:59';
        } else {
            throw new NotFoundException();
        }
        $conditions['Student.delete_flag'] = 0;
        $conditions['LENGTH(Student.sid) >'] = 0;
        $this->Paginator->settings = array(
            'recursive' => -1,
            'conditions' => $conditions,
            'order' => 'STT ASC',
            'limit' => 1000,
            'paramType' => 'querystring',
        );
        $students = $this->Paginator->paginate();
//        debug($students);die;
        $this->set(compact('students', 'dateFilter'));
    }

    public function registration_statistic($dateFilter = null) {
        if (!empty($dateFilter)) {
            $conditions['Student.date >='] = $dateFilter . ' 00:00:00';
            $conditions['Student.date <='] = $dateFilter . ' 23:59:59';
        } else {
            throw new NotFoundException();
        }
        $conditions['Student.delete_flag'] = 0;
//        $conditions['LENGTH(Student.sid) >'] = 0;
        $registedTracking = $this->Student->find('all', array(
            'recursive' => -1,
            'fields' => array('madiem', 'COUNT(madiem) AS submit'),
            'conditions' => $conditions,
            'order' => 'submit DESC',
            'group' => 'madiem',
            'limit' => 1000,
        ));
        $timeRangeTracking = array();
        $timeRangeString = "[";
        for ($i = 0; $i < 24; $i++) {
            $conditions['EXTRACT(HOUR FROM Student.date)'] = $i;
            $timeRangeTracking[$i] = $this->Student->find('count', array(
                'recursive' => -1,
                'conditions' => $conditions,
                'group' => 'madiem',
                'limit' => 1000,
            ));
            if ($i > 0) {
                $timeRangeString .= ",";
            }
            $timeRangeString .= intval($timeRangeTracking[$i]);
        }
        $timeRangeString .= "]";
        $this->set(compact('registedTracking', 'dateFilter', 'timeRangeTracking', 'timeRangeString'));
    }
}
