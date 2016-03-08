<?php
/**
 * AreaBlockFixture
 *
 */
class AreaBlockFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'area_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'block' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'disable_flag' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'creator' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'area_id' => 1,
			'area_name' => 'Lorem ipsum dolor ',
			'block' => 1,
			'address' => 'Lorem ip',
			'disable_flag' => 1,
			'created' => '2015-02-27 03:05:49',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-02-27 03:05:49',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
