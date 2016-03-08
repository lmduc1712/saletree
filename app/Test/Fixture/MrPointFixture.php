<?php
/**
 * MrPointFixture
 *
 */
class MrPointFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'mr_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'available_points' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'this_month_lapse_points' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'next_month_lapse_points' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'calculate_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'mr_id', 'unique' => 1)
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
			'mr_id' => 'Lorem ipsum d',
			'available_points' => 1,
			'this_month_lapse_points' => 1,
			'next_month_lapse_points' => 1,
			'calculate_at' => '2014-10-10 04:19:05'
		),
	);

}
