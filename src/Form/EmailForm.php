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

class EmailForm extends Form {

    private $utility;

    public function __construct() {
        parent::__construct();
        $this->utility = new MailUtility();
    }

    protected function _buildSchema(Schema $schema) {
        return $schema->addField('email', ['type' => 'string']);
    }

    protected function _buildValidator(Validator $validator) {
        $validator->add('email', 'format', ['rule' => 'email', 'message' => 'A valid email address is required',]);

        return $validator;
    }

    protected function _execute(array $data) {
        if (empty($this->getErrors())) {
            // Send an email.    
            return $this->utility->sendRegistrationMail($data);
        }
        return false;
    }

}
