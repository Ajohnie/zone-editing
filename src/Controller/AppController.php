<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Log\Log;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Exception;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        try {
            $this->loadComponent('RequestHandler', ['enableBeforeRedirect' => false]);
            $this->loadComponent('Auth', [
                'authorize' => 'Controller',
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'email',
                            'password' => 'password'
                        ]
                    ]
                ],
                'loginAction' => ['controller' => 'Users', 'action' => 'login'],
                'loginRedirect' => ['controller' => 'Galleries', 'action' => 'index'],
                'logoutAction' => ['controller' => 'Users', 'action' => 'login'],
                'unauthorizedRedirect' => $this->referer()// If unauthorized, return them to page they were just on
            ]);
            $this->loadComponent('Flash');
        } catch (Exception $e) {
            Log::write(LOG_ERR, $e->getMessage());
        }

        // set controller to front end for use by menu
        $controller = strtolower($this->request->getParam('controller'));
        $this->set('controller', $controller);

    }

    /**general method for all controllers used to
     * check if user attempting to access a controller is allowed access
     * @param $user , user object with username(email)
     * @return bool true for authorize false for deny user access
     */
    public function isAuthorized($user)
    {
        $actionInUrl = strtolower($this->request->getParam('action'));
        $allowedAction = ($actionInUrl === 'logout'); // allow logout by default
        $controllerInUrl = strtolower($this->request->getParam('controller'));
        $isControllerAllowed = $controllerInUrl === 'search'
            || $controllerInUrl === 'users'
            || $controllerInUrl === 'admin'
            || $controllerInUrl === 'postcodemappings'
            || $controllerInUrl === 'zonedays'
            || $controllerInUrl === 'zonedates';

        if ($isControllerAllowed) {
            $allowedAction = true;
        }
        $XRequestedWithHeader = $this->request->getHeader('X-Requested-With');
        $isRequestAjax = !empty($XRequestedWithHeader);
        if ($isRequestAjax) {
            // disable Flash Messages for ajax users
            $this->Flash->set('', ['clear' => true]);
            // disable ajax requests
            $this->response = $this->response->withStatus(404, $this->Auth->getConfig('authError'));
        }
        return true;
    }

    /**
     * generic Method for deleting Entities
     * @param null $successMessage
     * @param null $failureMessage
     * @return Entity|False
     */
    protected function deleteEntity($successMessage = null, $failureMessage = null)
    {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $method = strtoupper($this->request->getMethod());
        if ($method === 'POST' || $method === 'DELETE') {
            $id = $this->getRequest()->getData()['id'];
        } else {
            $id = $this->getRequest()->getQuery('id');
        }
        $modelName = $this->guessModelNameFromController();
        if ($modelName === null) {
            return false;
        }
        $model = TableRegistry::getTableLocator()->get($modelName);
        $entity = $model->get($id);

        $entityWasDeleted = $model->delete($entity);
        if ($entityWasDeleted && $successMessage) {
            $this->Flash->success(__($successMessage));
        }
        if (!$entityWasDeleted && $failureMessage) {
            $this->Flash->error(__($failureMessage));
        }
        return $entityWasDeleted;
    }

    /**
     * generic Method for saving Entities
     * @return void
     */
    public function saveEntities($successMessage = null, $failureMessage = null)
    {
        $formWasSubmitted = $this->getRequest()->is('post');
        if ($formWasSubmitted) {
            $modelName = $this->guessModelNameFromController();
            if ($modelName === null) {
                return;
            }
            $model = TableRegistry::getTableLocator()->get($modelName);
            $newEntityFormData = $this->getRequest()->getData();
            $newEntity = $model->newEntity($newEntityFormData);
            $entityWasSaved = $model->save($newEntity);
            if ($entityWasSaved && $successMessage) {
                $this->Flash->success(__($successMessage));
            }
            if (!$entityWasSaved && $failureMessage) {
                $this->Flash->error(__($failureMessage));
            }
            $this->redirect($this->referer());
        }

    }

    protected function guessModelNameFromController()
    {
        $controllerInUrl = strtolower($this->request->getParam('controller'));
        $modelName = null;
        switch ($controllerInUrl) {
            case 'users';
            case 'admin';
                $modelName = 'Users';
                break;
            case 'postcodemappings';
                $modelName = 'Postcodemappings';
                break;
            case 'zonedays';
                $modelName = 'zonedays';
                break;
            case 'zonedates';
                $modelName = 'zonedates';
                break;
            default;
                break;
        }
        return $modelName;
    }

}
