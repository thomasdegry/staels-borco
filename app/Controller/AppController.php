<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    public $helpers = array('Html', 'Paginator', 'js');

    public $components = array(
            'Session',
            'Auth' => array(
                'loginRedirect' => array('controller' => 'Galleries', 'action' => 'index'),
                'logoutRedirect' => array('controller' => 'Users', 'action' => 'index'),
                'authError' => 'U moet ingelogd zijn om toegang te krijgen tot deze pagina',
                'authenticate' => array(
                    'Form' => array(
                        'fields' => array('username' => 'email'),
                    )
                ),
               'loginAction' => 'users'
            )
    );

    public function beforeFilter() {
        if($this->Session->read('Config.language') == NULL) {
            $this->Session->write('Config.language', 'dut');
        }

        $this->Auth->allow('index', 'setLanguage', 'email');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());

        Configure::write('Config.language', $this->Session->read('Config.language'));
        $this->set('language', $this->Session->read('Config.language'));
    }

    public function setLanguage() {
        $language = $this->request['pass'][0];
        $this->Auth->allow('index');

        switch($language) {
            case 'fre':
                $this->Session->write('Config.language', 'fre');
                break;

            case 'eng':
                $this->Session->write('Config.language', 'eng');
                break;

            case 'dut':
            default:
                $this->Session->write('Config.language', 'dut');
                break;
        }

        $this->redirect(array('controller' => $this->name, 'action' => 'index'));
    }

}
