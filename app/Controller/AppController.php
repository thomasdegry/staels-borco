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
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }

}
