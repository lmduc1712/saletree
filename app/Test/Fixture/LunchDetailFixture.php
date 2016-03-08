<?php
/**
 * LunchDetailFixture
 *
 */
class LunchDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'lunch_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 12, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '"L" + (YYYYMMDD) + (001~)', 'charset' => 'utf8'),
		'menu_rice' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'menu_main_dish' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'menu_side_dish' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'flavour' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'allergy' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'other' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'disable_flag' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'creator' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'lunch_id', 'unique' => 1)
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
			'lunch_id' => 'Lorem ipsu',
			'menu_rice' => 'Lorem ipsum dolor sit amet',
			'menu_main_dish' => 'Lorem ipsum dolor sit amet',
			'menu_side_dish' => 'Lorem ipsum dolor sit amet',
			'flavour' => 'Lorem ipsum dolor sit amet',
			'allergy' => 'Lorem ipsum dolor sit amet',
			'other' => 'Lorem ipsum dolor sit amet',
			'disable_flag' => 1,
			'created' => '2015-03-12 04:56:24',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-03-12 04:56:24',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
