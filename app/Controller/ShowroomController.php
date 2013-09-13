<?php
App::uses('AppController', 'Controller');

class ShowroomController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->layout = 'frontend';
    }
}
