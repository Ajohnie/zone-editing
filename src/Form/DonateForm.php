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

class DonateForm extends Form {

    private $utility;

    public function __construct() {
        parent::__construct();
        $this->utility = new MailUtility();
    }

    protected function _buildSchema(Schema $schema) {
        return $schema->addField('fname', 'string')
                        ->addField('lname', 'string')
                        ->addField('contact', ['type' => 'string'])
                        ->addField('email', ['type' => 'string'])
                        ->addField('amount', ['type' => 'number']);
    }

    protected function _buildValidator(Validator $validator) {
        $validator->add('fname', 'length', ['rule' => ['minLength', 1], 'message' => 'first name is required'])
                ->add('lname', 'length', ['rule' => ['minLength', 1], 'message' => 'last name is required'])
                ->add('email', 'format', ['rule' => 'email', 'message' => 'A valid email address is required',])
                ->add('contact', 'length', ['rule' => ['maxLength', 14], 'message' => 'phone number too long'])
                ->add('amount', 'length', ['rule' => ['minLength', 1], 'message' => 'enter amount']);
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
