<?php

namespace App\Controller;

use App\Controller\AppController;
Use Cake\Cache\Cache;

/**
 * Galleries Controller
 *
 * @property \App\Model\Table\GalleriesTable $Galleries
 *
 * @method \App\Model\Entity\Gallery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GalleriesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');
        if ($this->Auth->user() !== null) {
            $this->Auth->allow(['save', 'delete', 'index']);
        }
        else {
            $this->Auth->deny();
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $galleries = $this->Galleries->find()->cache('recent-galleries');
        $photo = $this->Galleries->newEntity();
        $this->set(compact('galleries', 'photo'));
        $this->viewBuilder()->setLayout('login');
    }

    public function save($id = null) {
        if ($id) {
            $photo = $this->Galleries->get($id);
        }
        else {
            $photo = $this->Galleries->newEntity();
        }
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if ($this->Galleries->save($this->Galleries->patchEntity($photo, $data))) {
                $msg = 'operation succeeded !';
                $this->Flash->success(__($msg));
                Cache::clearAll();
            }
            else {
                $uploadError = $this->Galleries->uploadError;
                $msg = (strlen($uploadError) > 2) ? $uploadError : 'operation failed !';
                $this->Flash->error(__($msg));
            }
            return $this->redirect($this->referer());
        }
    }

  
    public function delete($id) {
        if ($this->Galleries->exists(['id' => $id])) {
            $photo = $this->Galleries->get($id);
            if ($this->Galleries->delete($photo)) {
                $this->Flash->success(__('The photo has been deleted.'));
                Cache::clearAll();
            }
            else {
                $this->Flash->error(__('The photo could not be deleted. Please, try again.'));
            }
        }
        return $this->redirect($this->referer());
    }

}
