<?php
/**
 * CourseequivalentsSubjectFixture
 *
 */
class CourseequivalentsSubjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'subject_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'courseequivalent_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'courseequivalents_subjects_subjects' => array('column' => 'subject_id', 'unique' => 0),
			'courseequivalents_subjects_courseequivalents' => array('column' => 'courseequivalent_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'subject_id' => 1,
			'courseequivalent_id' => 1
		),
	);

}
