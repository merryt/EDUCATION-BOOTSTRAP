<?php
App::uses('AppController', 'Controller');
/**
 * CourseequivalentsSubjects Controller
 *
 * @property CourseequivalentsSubject $CourseequivalentsSubject
 */
class CourseequivalentsSubjectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CourseequivalentsSubject->recursive = 0;
		$this->set('courseequivalentsSubjects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CourseequivalentsSubject->id = $id;
		if (!$this->CourseequivalentsSubject->exists()) {
			throw new NotFoundException(__('Invalid courseequivalents subject'));
		}
		$this->set('courseequivalentsSubject', $this->CourseequivalentsSubject->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CourseequivalentsSubject->create();
			if ($this->CourseequivalentsSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The courseequivalents subject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courseequivalents subject could not be saved. Please, try again.'));
			}
		}
		$subjects = $this->CourseequivalentsSubject->Subject->find('list');
		$courseequivalents = $this->CourseequivalentsSubject->Courseequivalent->find('list');
		$this->set(compact('subjects', 'courseequivalents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CourseequivalentsSubject->id = $id;
		if (!$this->CourseequivalentsSubject->exists()) {
			throw new NotFoundException(__('Invalid courseequivalents subject'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseequivalentsSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The courseequivalents subject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courseequivalents subject could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CourseequivalentsSubject->read(null, $id);
		}
		$subjects = $this->CourseequivalentsSubject->Subject->find('list');
		$courseequivalents = $this->CourseequivalentsSubject->Courseequivalent->find('list');
		$this->set(compact('subjects', 'courseequivalents'));
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
		$this->CourseequivalentsSubject->id = $id;
		if (!$this->CourseequivalentsSubject->exists()) {
			throw new NotFoundException(__('Invalid courseequivalents subject'));
		}
		if ($this->CourseequivalentsSubject->delete()) {
			$this->Session->setFlash(__('Courseequivalents subject deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courseequivalents subject was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
