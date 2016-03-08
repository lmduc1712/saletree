<?php

App::uses('AppController', 'Controller');

/**
 * Top Controller
 *
 */
class TopController extends AppController {

    public $uses = array('Student', 'StudentNotify');

    public function index() {
        switch ($this->Auth->user('type')) {
            case 0:
                $this->render('admin_index');
        }
        $notifies = $this->StudentNotify->find('all', array(
            'conditions' => array(
                'StudentNotify.stage' => false
            )
        ));
        $dangerNotifies = array();
        foreach ($notifies as $notify) {
            if ((strtotime('now') - strtotime($notify['StudentNotify']['created'])) > 432000) {
                array_push($dangerNotifies, $notify);
            }
        }
        $this->set(compact('notifies', 'dangerNotifies'));
    }

}
