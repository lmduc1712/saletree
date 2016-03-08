<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package     app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    /**
     * Components
     *
     * @var array
     */
    public $components = array(
        'DebugKit.Toolbar',
        'Paginator' => array(
            'limit' => 20,
            'paramType' => 'querystring'
        ),
        'Session',
        'Auth'
    );
    
     /**
     * beforeFilter
     *
     * @return void
     */
    public function beforeFilter() {
        $this->disableCache();

        $this->layout = 'admin';

        // Setup authentication for admin section
        $this->Auth->loginRedirect = array('controller' => 'top', 'action' => 'index');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->authError = 'Hãy đăng nhập với ID và mật khẩu hiện tại của bạn.。';
        $this->Auth->authenticate = array(
            'Form' => array(
                'passwordHasher' => 'Blowfish',
                'userModel' => 'user',
                'fields' => array(
                    'username' => 'username'
                ),
                'scope' => array(
                    'delete_flag' => 0
                )
            )
        );
        AuthComponent::$sessionKey = 'Auth.User';

        $this->Auth->authorize = array('Controller');
        $this->Auth->unauthorizedRedirect = array('controller' => 'users', 'action' => 'login');
    }

    public function isAuthorized() {
        // Default all autheticated user can access page
        return true;
    }
    
    public function beforeRender() {
        parent::beforeRender();
    }
    
    public function render($view = null, $layout = null) {
        // TODO: call parent function
        $event = new CakeEvent('Controller.beforeRender', $this);
        $this->getEventManager()->dispatch($event);
        if ($event->isStopped()) {
            $this->autoRender = false;
            return $this->response;
        }

        if (!empty($this->uses) && is_array($this->uses)) {
            foreach ($this->uses as $model) {
                list($plugin, $className) = pluginSplit($model);
                $this->request->params['models'][$className] = compact('plugin', 'className');
            }
        }

        $this->View = $this->_getViewObject();

        $models = ClassRegistry::keys();
        foreach ($models as $currentModel) {
            $currentObject = ClassRegistry::getObject($currentModel);
            if ($currentObject instanceof Model) {
                $className = get_class($currentObject);
                list($plugin) = pluginSplit(App::location($className));
                $this->request->params['models'][$currentObject->alias] = compact('plugin', 'className');
                $this->View->validationErrors[$currentObject->alias] =& $currentObject->validationErrors;
            }
        }

        $this->autoRender = false;
        $this->response->body($this->View->render($view, $layout));
        return $this->response;
    }

    /**
     * Export file CSV
     * @param  mix $header, $exportData, $fileName
     * @return void
     * @author: AnhNH
     */
    
    public function renderCSV($headers, $exportData, $fileName) {
    	$this->layout = false;
        $this->render(false);
    	header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        
        foreach ($headers as $key => $header) {
            $headers[$key] = $this->_2sjis($header);
        }

        $csvFile = fopen('php://output', 'w');

        fputcsv($csvFile, $headers, ',', '"');

        foreach ($exportData as $row) {
            fputcsv($csvFile, $row, ',', '"');
        }

        fclose($csvFile);
    }
    
    /**
     * Convert UTF-8 to Shift JIS
     * @param  mix $val
     * @return mix
     */
    protected function _2sjis($val) {
        if (!is_string($val)) {
            return $val;
        }
        return mb_convert_encoding($val, "SJIS", "UTF-8");
    }
}
