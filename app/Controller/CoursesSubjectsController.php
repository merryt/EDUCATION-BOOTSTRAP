<?php
App::uses('AppController', 'Controller');
/**
 * CoursesSubjects Controller
 *
 * @property CoursesSubject $CoursesSubject
 */
class CoursesSubjectsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoursesSubject->recursive = 0;
		$this->set('coursesSubjects', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoursesSubject->id = $id;
		if (!$this->CoursesSubject->exists()) {
			throw new NotFoundException(__('Invalid courses subject'));
		}
		$this->set('coursesSubject', $this->CoursesSubject->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursesSubject->create();
			if ($this->CoursesSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The courses subject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses subject could not be saved. Please, try again.'));
			}
		}
		$subjects = $this->CoursesSubject->Subject->find('list');
		$courses = $this->CoursesSubject->Course->find('list');
		$this->set(compact('subjects', 'courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoursesSubject->id = $id;
		if (!$this->CoursesSubject->exists()) {
			throw new NotFoundException(__('Invalid courses subject'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoursesSubject->save($this->request->data)) {
				$this->Session->setFlash(__('The courses subject has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses subject could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoursesSubject->read(null, $id);
		}
		$subjects = $this->CoursesSubject->Subject->find('list');
		$courses = $this->CoursesSubject->Course->find('list');
		$this->set(compact('subjects', 'courses'));
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
		$this->CoursesSubject->id = $id;
		if (!$this->CoursesSubject->exists()) {
			throw new NotFoundException(__('Invalid courses subject'));
		}
		if ($this->CoursesSubject->delete()) {
			$this->Session->setFlash(__('Courses subject deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courses subject was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
