<?php
App::uses('Courseequivalent', 'Model');

/**
 * Courseequivalent Test Case
 *
 */
class CourseequivalentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courseequivalent',
		'app.course',
		'app.subject',
		'app.courseequivalents_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Courseequivalent = ClassRegistry::init('Courseequivalent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Courseequivalent);

		parent::tearDown();
	}

}
