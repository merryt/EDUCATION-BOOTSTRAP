<?php
/**
 * CourseFixture
 *
 */
class CourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vendor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cost' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'level_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'author' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'likes' => array('type' => 'integer', 'null' => true, 'default' => null),
		'facilitation_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'includes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'released' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'courseurl' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'imageurl' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 400, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'courses_vendors' => array('column' => 'vendor_id', 'unique' => 0),
			'courses_facilitations' => array('column' => 'facilitation_id', 'unique' => 0),
			'courses_levels' => array('column' => 'level_id', 'unique' => 0)
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
			'title' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'vendor_id' => 1,
			'cost' => 1,
			'duration' => 1,
			'level_id' => 1,
			'rating' => 1,
			'author' => 'Lorem ipsum dolor sit amet',
			'likes' => 1,
			'facilitation_id' => 1,
			'includes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'released' => '2012-10-06 20:52:42',
			'courseurl' => 'Lorem ipsum dolor sit amet',
			'imageurl' => 'Lorem ipsum dolor sit amet'
		),
	);

}
