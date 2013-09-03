<?php
App::uses('AppController', 'Controller');

class PicturesController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
		$this->set('picture', $this->Picture->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Picture->create();
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		}
		$galleries = $this->Picture->Gallery->find('list');
		$this->set(compact('galleries'));
	}

	public function edit($id = null) {
		if (!$this->Picture->exists($id)) {
			throw new NotFoundException(__('Invalid picture'));
		}

		if($this->request->is('ajax')) {
			$this->layout = 'ajax';
			if($this->Picture->save($this->request->data)) {
				echo 'saved';
				return false;
				die();
			}
			die();
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Picture->save($this->request->data)) {
				$this->Session->setFlash(__('The picture has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Picture.' . $this->Picture->primaryKey => $id));
			$this->request->data = $this->Picture->find('first', $options);
		}
		$galleries = $this->Picture->Gallery->find('list');
		$this->set(compact('galleries'));
	}

	public function delete($id = null) {
		$this->Picture->id = $id;

		if (!$this->Picture->exists()) {
			throw new NotFoundException(__('Invalid picture'));
		}
		$this->request->onlyAllow('post', 'delete');

		if($this->request->is('ajax')) {
			$this->layout = 'ajax';
		}

		if ($this->Picture->delete()) {
			$this->Session->setFlash(__('Picture deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}

	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow("*");
	}
}
