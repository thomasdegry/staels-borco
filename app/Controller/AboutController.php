<?php
App::uses('AppController', 'Controller');

class AboutController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->layout = 'frontend';

        $this->loadModel('Translation');

        $clean = array();
        $translations = $this->Translation->find('all', array(
            'conditions' => array(
                'Translation.page' => array('general', 'about')
            )
        ));

        foreach($translations as $translation) {
            $clean[$translation['Translation']['tag']] = $translation['Translation'];
        }

        $this->set('translations', $clean);
    }
}
