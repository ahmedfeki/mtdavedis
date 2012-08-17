<?php
App::uses('AppController', 'Controller');
/**
 * Editeurs Controller
 *
 * @property Editeur $Editeur
 */
class EditeursController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Editeur->recursive = 0;
		$this->set('editeurs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Editeur->id = $id;
		if (!$this->Editeur->exists()) {
			throw new NotFoundException(__('Invalid editeur'));
		}
		$this->set('editeur', $this->Editeur->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Editeur->create();
			if ($this->Editeur->save($this->request->data)) {
				$this->flash(__('Editeur saved.'), array('action' => 'index'));
			} else {
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Editeur->id = $id;
		if (!$this->Editeur->exists()) {
			throw new NotFoundException(__('Invalid editeur'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Editeur->save($this->request->data)) {
				$this->flash(__('The editeur has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Editeur->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Editeur->id = $id;
		if (!$this->Editeur->exists()) {
			throw new NotFoundException(__('Invalid editeur'));
		}
		if ($this->Editeur->delete()) {
			$this->flash(__('Editeur deleted'), array('action' => 'index'));
		}
		$this->flash(__('Editeur was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
