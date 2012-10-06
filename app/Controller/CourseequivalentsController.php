<?php
App::uses('AppController', 'Controller');
/**
 * Courseequivalents Controller
 *
 * @property Courseequivalent $Courseequivalent
 */
class CourseequivalentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Courseequivalent->recursive = 0;
		$this->set('courseequivalents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Courseequivalent->id = $id;
		if (!$this->Courseequivalent->exists()) {
			throw new NotFoundException(__('Invalid courseequivalent'));
		}
		$this->set('courseequivalent', $this->Courseequivalent->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Courseequivalent->create();
			if ($this->Courseequivalent->save($this->request->data)) {
				$this->Session->setFlash(__('The courseequivalent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courseequivalent could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Courseequivalent->Course->find('list');
		$subjects = $this->Courseequivalent->Subject->find('list');
		$this->set(compact('courses', 'subjects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Courseequivalent->id = $id;
		if (!$this->Courseequivalent->exists()) {
			throw new NotFoundException(__('Invalid courseequivalent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Courseequivalent->save($this->request->data)) {
				$this->Session->setFlash(__('The courseequivalent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courseequivalent could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Courseequivalent->read(null, $id);
		}
		$courses = $this->Courseequivalent->Course->find('list');
		$subjects = $this->Courseequivalent->Subject->find('list');
		$this->set(compact('courses', 'subjects'));
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
		$this->Courseequivalent->id = $id;
		if (!$this->Courseequivalent->exists()) {
			throw new NotFoundException(__('Invalid courseequivalent'));
		}
		if ($this->Courseequivalent->delete()) {
			$this->Session->setFlash(__('Courseequivalent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courseequivalent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
