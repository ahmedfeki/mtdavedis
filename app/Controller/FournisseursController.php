<?php
App::uses('AppController', 'Controller');
/**
 * Fournisseurs Controller
 *
 * @property Fournisseur $Fournisseur
 */
class FournisseursController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Fournisseur->recursive = 0;
		$this->set('fournisseurs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Fournisseur->id = $id;
		if (!$this->Fournisseur->exists()) {
			throw new NotFoundException(__('Invalid fournisseur'));
		}
		$this->set('fournisseur', $this->Fournisseur->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fournisseur->create();
			if ($this->Fournisseur->save($this->request->data)) {
				$this->flash(__('Fournisseur saved.'), array('action' => 'index'));
			} else {
			}
		}
		$payes = $this->Fournisseur->Paye->find('list');
		$villes = $this->Fournisseur->Ville->find('list');
		$this->set(compact('payes', 'villes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Fournisseur->id = $id;
		if (!$this->Fournisseur->exists()) {
			throw new NotFoundException(__('Invalid fournisseur'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Fournisseur->save($this->request->data)) {
				$this->flash(__('The fournisseur has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Fournisseur->read(null, $id);
		}
		$payes = $this->Fournisseur->Paye->find('list');
		$villes = $this->Fournisseur->Ville->find('list');
		$this->set(compact('payes', 'villes'));
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
		$this->Fournisseur->id = $id;
		if (!$this->Fournisseur->exists()) {
			throw new NotFoundException(__('Invalid fournisseur'));
		}
		if ($this->Fournisseur->delete()) {
			$this->flash(__('Fournisseur deleted'), array('action' => 'index'));
		}
		$this->flash(__('Fournisseur was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
