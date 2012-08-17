<?php
App::uses('AppController', 'Controller');
/**
 * Commercials Controller
 *
 * @property Commercial $Commercial
 */
class CommercialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Commercial->recursive = 0;
		$this->set('commercials', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Commercial->id = $id;
		if (!$this->Commercial->exists()) {
			throw new NotFoundException(__('Invalid commercial'));
		}
		$this->set('commercial', $this->Commercial->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Commercial->create();
			if ($this->Commercial->save($this->request->data)) {
				$this->flash(__('Commercial saved.'), array('action' => 'index'));
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
		$this->Commercial->id = $id;
		if (!$this->Commercial->exists()) {
			throw new NotFoundException(__('Invalid commercial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Commercial->save($this->request->data)) {
				$this->flash(__('The commercial has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->Commercial->read(null, $id);
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
		$this->Commercial->id = $id;
		if (!$this->Commercial->exists()) {
			throw new NotFoundException(__('Invalid commercial'));
		}
		if ($this->Commercial->delete()) {
			$this->flash(__('Commercial deleted'), array('action' => 'index'));
		}
		$this->flash(__('Commercial was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
