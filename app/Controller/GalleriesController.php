<?php
App::uses('AppController', 'Controller');
/**
 * Galleries Controller
 *
 * @property Gallery $Gallery
 * @property PaginatorComponent $Paginator
 */
class GalleriesController extends AppController {

	public $components = array('Paginator');

	public function index() {
        $this->layout = 'frontend';
        $this->loadModel('Translation');

        $galleries = $this->Gallery->find('all');

        $clean = array();
        $translations = $this->Translation->find('all', array(
            'conditions' => array(
                'Translation.page' => array('general', 'gallery')
            )
        ));

        foreach($translations as $translation) {
            $clean[$translation['Translation']['tag']] = $translation['Translation'];
        }

        $this->set('translations', $clean);
        $this->set('galleries', $galleries);
	}

	public function overview() {
		$this->paginate = array(
                'limit' => 1000,
           );

		$galleries = $this->paginate('Gallery');
		$this->set('galleries', $galleries);
	}

	public function view($id = null) {
		if (!$this->Gallery->exists($id)) {
			throw new NotFoundException(__('Invalid gallery'));
		}
		// $options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
		// $this->set('gallery', $this->Gallery->find('first', $options));
		
		$gallery = $this->Gallery->find('first', array('conditions' => array(
			'Gallery.id' => $id
		)));
		$this->set('gallery', $gallery);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Gallery->create();
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash(__('De nieuwe galerij werd aangemaakt. Je kan nu foto\'s toevoegen!'), 'good_flash');
				return $this->redirect(array('action' => 'view', $this->Gallery->getLastInsertID()));
			} else {
				$this->Session->setFlash(__('De galerij kon niet worden opgeslaan...'), 'bad_flash');
			}
		}
	}

	public function edit($id = null) {
		if (!$this->Gallery->exists($id)) {
			throw new NotFoundException(__('Invalid gallery'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash(__('De galerij werd bewaard.'), 'good_flash');
				return $this->redirect(array('action' => 'overview'));
			} else {
				$this->Session->setFlash(__('De galerij kon niet worden opgeslaan...'), 'bad_flash');
			}
		} else {
			$options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
			$this->request->data = $this->Gallery->find('first', $options);
		}
	}

	public function refresh($id) {
		if($this->request->is('ajax')) {
			$this->layout = 'ajax';
		}

		$gallery = $this->Gallery->find('first', array('conditions' => array(
			'Gallery.id' => $id
		)));
		$this->set('gallery', $gallery);
	}

	public function delete($id = null) {
		$this->Gallery->id = $id;
		if (!$this->Gallery->exists()) {
			throw new NotFoundException(__('Invalid gallery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Gallery->delete()) {
			$this->loadModel('Picture');
			$this->Picture->deleteAll(array('Picture.gallery_id' => $id), false);

			$this->Session->setFlash(__('De galerij werd verwijderd'), 'good_flash');
			return $this->redirect(array('action' => 'overview'));
		}
		$this->Session->setFlash(__('De galerij kon niet worden verwijderd'), 'bad_flash');
		return $this->redirect(array('action' => 'overview'));
	}
}
