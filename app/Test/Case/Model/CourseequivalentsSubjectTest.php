<?php
App::uses('CourseequivalentsSubject', 'Model');

/**
 * CourseequivalentsSubject Test Case
 *
 */
class CourseequivalentsSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courseequivalents_subject',
		'app.subject',
		'app.courseequivalent',
		'app.course'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseequivalentsSubject = ClassRegistry::init('CourseequivalentsSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseequivalentsSubject);

		parent::tearDown();
	}

}
