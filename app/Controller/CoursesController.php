<?php
App::uses('AppController', 'Controller');
/**
 * Courses Controller
 *
 * @property Course $Course
 */
class CoursesController extends AppController {

	public $paginate = array(
		'limit' => 4					// Default paging info
		,'paramType' => 'querystring'
	);

/**
 * index method
 *
 * @return void
 */
	public function search() {
		
		$this->set('title_for_layout','Search');

		$conditions = array();
		if(isset($this->request->query['keywords'])) {
			$conditions = array(
				array('OR' => array(
					 "Course.title LIKE" => '%'.$this->request->query['keywords'].'%'
					,"Course.description LIKE" => '%'.$this->request->query['keywords'].'%'
				)
			));			
		}
	
		if(isset($this->request->query['me'])) {
			$conditions['User.id'] = 1;
		}
				
		$query = array(
			 'conditions' => $conditions
			,'order' => 'Course.id'
		);
		
		// Real query
		$this->paginate = array_merge($this->paginate,$query);
		$courses = $this->paginate();
		$this->set('courses', $courses);
	}
	protected function getLastQuery($model) {
		$dbo = $model->getDatasource();
		$logs = $dbo->getLog();
		$lastLog = end($logs['log']);
		return $lastLog['query'];
	}
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		$this->set('course', $this->Course->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Course->create();
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		}
		$vendors = $this->Course->Vendor->find('list');
		$levels = $this->Course->Level->find('list');
		$facilitations = $this->Course->Facilitation->find('list');
		$subjects = $this->Course->Subject->find('list');
		$this->set(compact('vendors', 'levels', 'facilitations', 'subjects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Course->read(null, $id);
		}
		$vendors = $this->Course->Vendor->find('list');
		$levels = $this->Course->Level->find('list');
		$facilitations = $this->Course->Facilitation->find('list');
		$subjects = $this->Course->Subject->find('list');
		$this->set(compact('vendors', 'levels', 'facilitations', 'subjects'));
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
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->Course->delete()) {
			$this->Session->setFlash(__('Course deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
