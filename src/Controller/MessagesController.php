<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;
use App\Form\EmailForm;
use App\Form\DonateForm;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 *
 * @method \App\Model\Entity\City[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['donate']);
    }

    private function checkForm($form, $data) {
        $isValid = $form->validate($data);
        $msg = 'Your Message Has been Recieved!, We will get back to you soon.';
        if (!$isValid) {
            $errors = '';
            foreach ($form->getErrors() as $key => $error) {
                $errors = $errors . ' ' . strval(array_values($error)[0]);
            }
            return $this->response->withStatus(404, $errors)->withStringBody($errors);
        }
        if ($form->execute($data)) {
            return $this->response->withStatus(200, $msg)->withStringBody($msg);
        } else {
            $msg = 'There was a problem while submitting your message';
            return $this->response->withStatus(404, $msg)->withStringBody($msg);
        }
    }

    public function contact() {
        if ($this->request->is(['ajax', 'post'])) {
            $form = new ContactForm();
            $data = $this->request->getData();
            return $this->checkForm($form, $data);
        }
    }

    public function donate() {
        if ($this->request->is(['ajax', 'post'])) {
            $form = new DonateForm();
            $data = $this->request->getData();
            return $this->checkForm($form, $data);
        }
    }

    public function email() {
        if ($this->request->is(['ajax', 'post'])) {
            $form = new EmailForm();
            return $this->checkForm($form, $this->request->getData());
        }
    }

    public function sent() {
        $this->viewBuilder()->setLayout('message');
    }

}
