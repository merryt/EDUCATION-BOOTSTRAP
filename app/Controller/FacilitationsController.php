<?php
App::uses('AppController', 'Controller');
/**
 * Facilitations Controller
 *
 * @property Facilitation $Facilitation
 */
class FacilitationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Facilitation->recursive = 0;
		$this->set('facilitations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Facilitation->id = $id;
		if (!$this->Facilitation->exists()) {
			throw new NotFoundException(__('Invalid facilitation'));
		}
		$this->set('facilitation', $this->Facilitation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Facilitation->create();
			if ($this->Facilitation->save($this->request->data)) {
				$this->Session->setFlash(__('The facilitation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facilitation could not be saved. Please, try again.'));
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
		$this->Facilitation->id = $id;
		if (!$this->Facilitation->exists()) {
			throw new NotFoundException(__('Invalid facilitation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Facilitation->save($this->request->data)) {
				$this->Session->setFlash(__('The facilitation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facilitation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Facilitation->read(null, $id);
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
		$this->Facilitation->id = $id;
		if (!$this->Facilitation->exists()) {
			throw new NotFoundException(__('Invalid facilitation'));
		}
		if ($this->Facilitation->delete()) {
			$this->Session->setFlash(__('Facilitation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Facilitation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
