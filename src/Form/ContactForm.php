<?php

/**
 * Description of ContactForm
 *
 * @author johnson
 */

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use App\Form\MailUtility;

class ContactForm extends Form {

    private $utility;

    public function __construct() {
        parent::__construct();
        $this->utility = new MailUtility();
    }

    protected function _buildSchema(Schema $schema) {
        return $schema->addField('name', 'string')
                        ->addField('email', ['type' => 'string'])
                        ->addField('message', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator) {
        $validator->add('name', 'length', ['rule' => ['minLength', 10], 'message' => 'A name is required'])
                ->add('email', 'format', ['rule' => 'email', 'message' => 'A valid email address is required',])
                ->add('message', 'length', ['rule' => ['minLength', 10], 'message' => 'message is too short']);
        return $validator;
    }

    protected function _execute(array $data) {
        // Send an email.    
        if (empty($this->getErrors())) {
            return $this->utility->sendContactMail($data) && $this->utility->sendContactMailToUs($data);
        }
        return false;
    }

}
