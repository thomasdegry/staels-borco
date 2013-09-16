<?php
App::uses('AppController', 'Controller');

class ContactsController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->layout = 'frontend';
        $this->loadModel('Translation');

        $clean = array();
        $translations = $this->Translation->find('all', array(
            'conditions' => array(
                'Translation.page' => array('general', 'home')
            )
        ));

        foreach($translations as $translation) {
            $clean[$translation['Translation']['tag']] = $translation['Translation'];
        }

        $this->set('translations', $clean);
    }

    public function email() {
        $this->autoRender = false;

        die();
        $this->loadModel('Email');
        if($this->Email->save($this->request->data['email'])) {
            $from_address = $this->request->data["email"]["email"];

            $name = $this->request->data["email"]["name"];
            $message = $this->request->data["email"]["message"];

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            $headers .= "Content-Transfer-Encoding: 8bit\r\n";
            $headers .= "From: =?UTF-8?B?". base64_encode($name) ."?=  <$from_address>\r\n";
            $headers .= "X-Mailer: PHP/". phpversion();

            $subject = "Een berichtje van op de website!";

            $message = '<html><body>';
            $message .= '<h2>Beste!</h2>';
            $message .= '<p>U ontving zonet op ' . date('d-m H:i') . ' een berichtje op de website van niemand minder dan ' . $name . ' </p>';
            $message .= '<p>Het berichtje:</p>';
            $message .= $message;
            $message .= '<p>U kunt ' . $name . ' terugmailen door gewoon de reply toets te gebruiken!</p>';
            $message .= '<p>Groetjes, <br/>De Staels Borco website.</p>';
            $message .= '<p><small>Dit is een automatisch gegenereerde mail, vanzelfsprekend</small></p>';
            $message .= '</body></html>';

            // mail('astaels@staels.com, jdeclippele@staels.com', 'Een berichtje van op de website', $message, $headers);
            mail('degry.thomas@gmail.com, tatiana.van.campenhout@gmail.com', 'Een berichtje van op de website', $message, $headers);

            sleep(2);

            $headers_client = "MIME-Version: 1.0\r\n";
            $headers_client .= "Content-Type: text/html; charset=utf-8\r\n";
            $headers_client .= "Content-Transfer-Encoding: 8bit\r\n";
            $headers_client .= "From: =?UTF-8?B?". 'Staels Borco' ."?=  <noreply@staelsborco.com>\r\n";
            $headers_client .= "X-Mailer: PHP/". phpversion();


            $subject = '';
            $email;

            switch($this->Session->read('Config.language')) {
                case 'dut':
                    $subject = 'Uw bericht aan Stael Borco';
                    $email = file_get_contents('http://' . $_SERVER['HTTP_HOST'] . $this->base . '/mail.html');
                    break;

                case 'fre':
                    $subject = 'Votre message à Stael Borco';
                    $email = file_get_contents('http://' . $_SERVER['HTTP_HOST'] . $this->base . '/mail_fre.html');
                    break;

                case 'eng':
                    $subject = 'Your message to Staels Borco';
                    $email = file_get_contents('http://' . $_SERVER['HTTP_HOST'] . $this->base . '/mail_eng.html');
                    break;
            }

            $email = str_replace('{{name}}', $name, $email);
            $email = str_replace('{{message}}', 'Bericht', $message);
            $email = str_replace('{{email}}', 'degry.thomas@gmail.com', $email);
            $email = str_replace('{{date}}', date('d-m-Y'), $email);

            mail($this->request->data['email']['email'], $subject, $email, $headers_client);

            echo 'done';
            die();
        }
    }
}
