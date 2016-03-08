<?php

/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Model', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    public $actsAs = array('Containable');

    /**
     * Generate id for model.
     * Example for the 2nd 'news' (prefix 'N') created in 2014-10-15, its id will be : N201410150002
     * 
     * @param {string} $prefix prefix of key
     * @param {int} $countLength length of the counting part (not of the key)
     * @param {bool} $includeDate control displaying the date in the key or not, true is yes (will display)
     * @return {string} new key
     */
    public function genKey($prefix = '', $countLength = 3, $includeDate = true) {
        if($includeDate){
            //starting point of the current day
            $startDate = date('Y-m-d 00:00:00');

            //ending point of the current day
            $endDate = date('Y-m-d 23:59:59');

            //get the lastes record of the current day
            $lastRecord = $this->find('first', array(
                'recursive' => -1,
                'conditions' => array(
                    'created BETWEEN ? AND ?' => array($startDate, $endDate)
                ),
                'order' => array('created' => 'desc', 'id' => 'desc')
            ));
        } else {
            $lastRecord = $this->find('first', array(
                'recursive' => -1,
                'order' => array('id' => 'desc')
            ));
        }
        
        $countFactor = 1;
        if (!empty($lastRecord)) {
            $countFactor = intval(substr($lastRecord[$this->alias]['id'], strlen($lastRecord[$this->alias]['id']) - $countLength));
            $countFactor++;
        }
        
        if ($includeDate){
            //prefix + current_date + countFactor
            $key = $prefix . date_format(new DateTime($startDate), 'Ymd') . str_pad($countFactor, $countLength, '0', STR_PAD_LEFT);
        } else {
            //prefix + countFactor
            $key = $prefix . str_pad($countFactor, $countLength, '0', STR_PAD_LEFT);
        }
        
        return $key;
    }

    private function __getLoginName() {

        // in batch section.
        if (php_sapi_name() == 'cli') {

            if (Configure::check('LoginName')) {
                return Configure::read('LoginName');
            }

            return 'SYSTEM';
        }

        $request = Router::getRequest();

        // unknow section
        if (!$request) {
            return null;
        }

        // in admin section
        if (isset($request->params['admin'])) {
            return AuthComponent::user('fullname');
        }

        // in front end section
        return AuthComponent::user('name');
    }
    
    public function beforeSave($options = array()) {
        $result = parent::beforeSave($options);

        if ($result) {
            // #1666
            $exists = $this->exists();
            $dateFields = array('modifier');
            if (!$exists) {
                $dateFields[] = 'creator';
            }

            $fields = array();
            if (isset($this->data[$this->alias])) {
                $fields = array_keys($this->data[$this->alias]);
            }

            $username = $this->__getLoginName();

            foreach ($dateFields as $updateCol) {
                if (in_array($updateCol, $fields) || !$this->hasField($updateCol)) {
                    continue;
                }

                if (!empty($this->whitelist)) {
                    $this->whitelist[] = $updateCol;
                }
                $this->set($updateCol, $username);
            }
        }

        return $result;
        
        // if ($this->hasField(array('creator', 'modifier'))){
        //     if (!AuthComponent::user('id') || AuthComponent::user('rank')){
        //         $username = 'WEB';
        //     } else {
        //         $username = AuthComponent::user('fullname') ? AuthComponent::user('fullname') : AuthComponent::user('id');
        //     }
            
        //     if ($this->hasField('creator') && !isset($this->data[$this->alias][$this->primaryKey])){
        //         $this->data[$this->alias]['creator'] = $username;
        //     }

        //     if ($this->hasField('modifier') && isset($this->data[$this->alias][$this->primaryKey])) {
        //         $this->data[$this->alias]['modifier'] = $username;
        //     }
        // }
    }

    /**
     * get validate error into array
     * if has many error message, only display a message
     * @return array
     */
    public function getValidateError() {
        $message = 'データベースへの更新に失敗しました。もう一度やり直して下さい。';

        $errors = Set::flatten($this->validationErrors);

        foreach($errors as $error) {
            $message = $error;
            break;
        }

        return array($error);
    }

    public function loadModel($modelName) {
        if (!class_exists($modelName)) {
            App::uses($modelName, 'Model');
        }
        $this->$modelName = new $modelName();
    }
}
