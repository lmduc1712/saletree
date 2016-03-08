<?php
/**
 * RankingSumFixture
 *
 */
class RankingSumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'address1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lunch_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unit_price' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sold_quantity' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'disable_flag' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'address1' => 'Lorem ipsum dolor sit amet',
			'lunch_id' => 'Lorem ipsu',
			'unit_price' => 1,
			'sold_quantity' => 1,
			'disable_flag' => 1,
			'created' => '2015-03-05 11:20:04',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-03-05 11:20:04',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
