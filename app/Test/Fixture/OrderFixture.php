<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_reception_datetime' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'mr_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'order_unit_serial' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'lunch_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 12, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'provider_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sale_price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'wholesale_price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mr_campaign_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'granted_points' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'point_expried_date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'total_points' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'id' => 'Lorem ipsum do',
			'order_reception_datetime' => '2014-10-09 09:55:04',
			'mr_id' => 'Lorem ipsum d',
			'order_unit_serial' => 1,
			'lunch_id' => 'Lorem ipsu',
			'provider_id' => 'Lorem ipsum',
			'quantity' => 1,
			'sale_price' => 1,
			'wholesale_price' => 1,
			'mr_campaign_id' => 1,
			'granted_points' => 1,
			'point_expried_date' => 'Lorem ip',
			'total_points' => 1,
			'disable_flag' => 1,
			'created' => '2014-10-09 09:55:04',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-10-09 09:55:04',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
