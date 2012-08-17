<?php
App::uses('AppController', 'Controller');
/**
 * Contrats Controller
 *
 * @property Contrat $Contrat
 */
class ContratsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contrat->recursive = 0;
		$this->set('contrats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Contrat->id = $id;
		if (!$this->Contrat->exists()) {
			throw new NotFoundException(__('Invalid contrat'));
		}
		$this->set('contrat', $this->Contrat->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contrat->create();
			if ($this->Contrat->save($this->request->data)) {
				$this->flash(__('Contrat saved.'), array('action' => 'index'));
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
		$this->Contrat->id = $id;
		if (!$this->Contrat->exists()) {
			throw new NotFoundException(__('Invalid contrat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contrat->save($this->request->data)) {
				$this->flash(__('The contrat has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Contrat->read(null, $id);
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
		$this->Contrat->id = $id;
		if (!$this->Contrat->exists()) {
			throw new NotFoundException(__('Invalid contrat'));
		}
		if ($this->Contrat->delete()) {
			$this->flash(__('Contrat deleted'), array('action' => 'index'));
		}
		$this->flash(__('Contrat was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
