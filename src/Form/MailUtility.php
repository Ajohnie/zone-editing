<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Form;

use Cake\Mailer\Email;
use Cake\Network\Exception\SocketException;
use Cake\Log\Log;

/**
 * Description of SendEmail
 *
 * @author johnson
 */
class MailUtility {

    public function __construct() {
        
    }

    public function sendContactMailToUs(array $options = null) {
        $mail = new Email('default');
        $mail->setFrom(['info@bescharityfoundation.org' => 'BES CHARITY FOUNDATION'])
                ->setSubject('BES CHARITY FOUNDATION: Request For More Information')
                ->setEmailFormat('html')
                ->setSender('info@bescharityfoundation.org')
                ->setViewVars(['info' => $options])
                ->setTo('info@bescharityfoundation.org');
        $mail->viewBuilder()->setTemplate('contactus', 'default');
        try {
            $mail->send();
            return true;
        } catch (SocketException $ex) {
            $this->log($ex);
            return false;
        }
    }

    public function sendContactMail(array $options = null) {
        $mail = new Email('default');
        $mail->setFrom(['info@bescharityfoundation.org' => 'BES CHARITY FOUNDATION'])
                ->setSubject('BES CHARITY FOUNDATION: Request For More Information')
                ->setEmailFormat('html')
                ->setSender('info@bescharityfoundation.org')
                ->setViewVars(['info' => $options])
                ->setTo($options['email']);
        $mail->viewBuilder()->setTemplate('contact', 'default');


        try {
            $mail->send();
            return true;
        } catch (SocketException $ex) {
            $this->log($ex);
            return false;
        }
    }

    public function sendRegistrationMail(array $options = null) {
        return true;
    }

    protected function log($msg) {
        Log::write(LOG_INFO, $msg);
    }

}
