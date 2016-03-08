<?php
/**
 * ProviderFixture
 *
 */
class ProviderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'assigned_person_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'building' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'regular_holiday' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'min_delivery_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'min_delivery_amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'business_hours_from' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'business_hours_to' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_hours_from' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_hours_to' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lunch_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'disable_flag' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'provider_memo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'creator' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'main_ingredient_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'lunch_other_info_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'img_save_dest' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_fee' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'id' => 'Lorem ipsum',
			'name' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum d',
			'fax' => 'Lorem ipsum d',
			'assigned_person_name' => 'Lorem ipsum dolor sit amet',
			'mail_address' => 'Lorem ipsum dolor sit amet',
			'postcode' => 'Lorem ',
			'address1' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'building' => 'Lorem ipsum dolor sit amet',
			'regular_holiday' => 'Lorem ipsum dolor sit amet',
			'min_delivery_number' => 1,
			'min_delivery_amount' => 1,
			'business_hours_from' => 'Lor',
			'business_hours_to' => 'Lor',
			'delivery_hours_from' => 'Lor',
			'delivery_hours_to' => 'Lor',
			'lunch_type' => 'Lorem ipsum dolor sit amet',
			'disable_flag' => 1,
			'provider_memo' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-03-03 09:32:17',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-03-03 09:32:17',
			'modifier' => 'Lorem ipsum dolor sit amet',
			'main_ingredient_id' => 1,
			'lunch_other_info_id' => 1,
			'img_save_dest' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'delivery_fee' => 1
		),
	);

}
