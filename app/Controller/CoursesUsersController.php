<?php
App::uses('AppController', 'Controller');
/**
 * CoursesUsers Controller
 *
 * @property CoursesUser $CoursesUser
 */
class CoursesUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CoursesUser->recursive = 0;
		$this->set('coursesUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CoursesUser->id = $id;
		if (!$this->CoursesUser->exists()) {
			throw new NotFoundException(__('Invalid courses user'));
		}
		$this->set('coursesUser', $this->CoursesUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoursesUser->create();
			if ($this->CoursesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The courses user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses user could not be saved. Please, try again.'));
			}
		}
		$courses = $this->CoursesUser->Course->find('list');
		$users = $this->CoursesUser->User->find('list');
		$statuses = $this->CoursesUser->Status->find('list');
		$this->set(compact('courses', 'users', 'statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CoursesUser->id = $id;
		if (!$this->CoursesUser->exists()) {
			throw new NotFoundException(__('Invalid courses user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CoursesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The courses user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The courses user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CoursesUser->read(null, $id);
		}
		$courses = $this->CoursesUser->Course->find('list');
		$users = $this->CoursesUser->User->find('list');
		$statuses = $this->CoursesUser->Status->find('list');
		$this->set(compact('courses', 'users', 'statuses'));
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
		$this->CoursesUser->id = $id;
		if (!$this->CoursesUser->exists()) {
			throw new NotFoundException(__('Invalid courses user'));
		}
		if ($this->CoursesUser->delete()) {
			$this->Session->setFlash(__('Courses user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Courses user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
