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

class SearchForm extends Form {

    private $utility;

    public function __construct() {
        parent::__construct();
        $this->utility = new MailUtility();
    }

    protected function _buildSchema(Schema $schema) {
        return $schema->addField('city', 'integer')
                        ->addField('type', 'integer')
                        ->addField('listing', 'integer')
                        ->addField('minPrice', 'integer')
                        ->addField('maxPrice', 'integer');
    }

    protected function _buildValidator(Validator $validator) {
        $validator->add('city_id', 'length', ['rule' => ['minLength', 1], 'message' => 'A city is required'])
                ->add('offerType_id', 'length', ['rule' => ['minLength', 1], 'message' => 'offer Type is required'])
                ->add('listingType_id', 'length', ['rule' => ['minLength', 1], 'message' => 'A Listing Type is required'])
                ->add('minPrice', 'length', ['rule' => ['minLength', 1], 'message' => 'min price is required'])
                ->add('maxPrice', 'length', ['rule' => ['minLength', 1], 'message' => 'max price is required']);

        return $validator;
    }

    protected function _execute(array $data) {
        
        return true;
    }

}
