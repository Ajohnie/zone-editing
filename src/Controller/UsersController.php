<?php

namespace App\Controller;

use App\Model\Entity\User;
use App\Model\Table\UsersTable;
use Cake\Datasource\ResultSetInterface;
use Cake\Http\Response;

/**
 * Users Controller
 *
 * @property UsersTable $Users
 *
 * @method User[]|ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        if ($this->Auth->user() !== null) {
            $this->Auth->allow(['index', 'delete']);
        } else {
            $this->Auth->deny(['index', 'delete']);
        }
        $this->Auth->allow(['logout', 'login']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $userIsAllowed = $this->Auth->identify();
            if ($userIsAllowed) {
                $this->Auth->setUser($userIsAllowed);
                $adminPanelUrl = ['controller' => 'Zonedates', 'action' => 'index'];
                return $this->redirect($adminPanelUrl);
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
        $homeUrl = ['controller' => 'Search', 'action' => 'index'];
        $this->set(compact('homeUrl'));
        $this->viewBuilder()->setLayout('admin');
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [],
            'order' => ['email' => 'asc'],
        ];
        $users = $this->paginate($this->Users);
        $newUser = $this->Users->newEntity();
        $this->set(compact('users', 'newUser'));
        $this->viewBuilder()->setLayout('admin');

        $this->saveEntities('User Saved !', 'Saving User Failed !');
    }


    /**
     * Delete method
     *
     * @return Response|null Redirects to index.
     */
    public function delete()
    {
        $this->deleteEntity('User has been deleted.', 'User could not be deleted. Please, try again.');
        return $this->redirect(['action' => 'index']);
    }

}
