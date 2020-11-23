<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');
        if ($this->Auth->user() !== null) {
            $this->Auth->allow(['add', 'edit', 'delete', 'getEmail']);
        }
        else {
            $this->Auth->deny(['add', 'edit', 'delete', 'getEmail']);
        }
        $this->Auth->allow(['logout', 'home']);
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
        $this->viewBuilder()->setLayout('login');
    }

    public function logout() {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    public function home() {
        return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $users = $this->Users->find()->contain(['Staffs'])->cache('recent_users');
        $this->set(compact('users'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['email'] = $this->findEmail($data['staff_id']);

            $user = $this->Users->patchEntity($user, $data);
            $msg = 'The user has been saved.';
            if ($this->Users->save($user)) {
                $this->Flash->success(__($msg));
            }
            else {
                $msg = 'The user could not be saved. Please, try again.';
                if (isset($user->getErrors()['email']['_isUnique'])) {
                    $msg = $user->getErrors()['email']['_isUnique'];
                }
                $this->Flash->error(__($msg));
            }


            return $this->redirect(['controller' => 'admin', 'action' => 'index']);
        }
        $staffs = $this->Users->Staffs->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => function($user) {
                return $user->fname . ' ' . $user->lname . ' ' . $user->otherNames;
            }]);
        $this->set(compact('user', 'staffs'));
    }

    public function getEmail() {
        $email = $this->findEmail($this->request->getQuery('id'));
        return $this->response->withStatus(200, $email)->withStringBody($email);
    }

    private function findEmail($id) {
        $staffs = TableRegistry::getTableLocator()->get('Staffs');
        $email = '';
        if (isset($id) && $staffs->exists(['id' => $id])) {
            $email = $staffs->get($id, ['contain' => []])->email;
        }
        return $email;
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit() {
        $id = $this->request->getQuery('id');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
            }
            else {
                $msg = 'The user could not be saved. Please, try again.';
                if (isset($user->getErrors()['email']['_isUnique'])) {
                    $msg = $user->getErrors()['email']['_isUnique'];
                }
                $this->Flash->error(__($msg));
            }

            return $this->redirect(['controller' => 'admin', 'action' => 'index']);
        }
        $staffs = $this->Users->Staffs->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => function($user) {
                return $user->fname . ' ' . $user->lname . ' ' . $user->otherNames;
            }]);
        $this->set(compact('user', 'staffs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete() {
        $this->request->allowMethod(['post', 'delete', 'get']);
        $id = $this->request->getQuery('id');

        if ($this->Users->exists(['id' => $id])) {
            $user = $this->Users->get($id, ['contain' => ['Staffs' => 'Roles']]);
            if ($this->Auth->user()['id'] == $user->id) {
                $this->Flash->error(__('Can not Delete Logged In User !'));
            }
            else if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            }
            else {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
        }

        return $this->response->withStatus(301, Router::url(['controller' => 'admin', 'action' => 'index']));
    }

}
