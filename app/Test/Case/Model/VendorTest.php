<?php
App::uses('Vendor', 'Model');

/**
 * Vendor Test Case
 *
 */
class VendorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vendor',
		'app.course',
		'app.courseequivalent',
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
		$this->Vendor = ClassRegistry::init('Vendor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vendor);

		parent::tearDown();
	}

}
