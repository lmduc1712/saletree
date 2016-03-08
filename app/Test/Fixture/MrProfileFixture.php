<?php
/**
 * MrProfileFixture
 *
 */
class MrProfileFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'mr_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'full_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'full_name_furigana' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rank' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'workplace' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'postcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'building' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tel' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'business_contact' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'personal_contact' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mail_address' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'point_exchange_enable_flag' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'disable_flag' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'point_expiration_contact_flag' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'internal_memo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'creator' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'mr_code', 'unique' => 1),
			'mr_code' => array('column' => 'mr_code', 'unique' => 1)
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
			'mr_code' => 'Lorem ipsum d',
			'full_name' => 'Lorem ipsum dolor sit amet',
			'full_name_furigana' => 'Lorem ipsum dolor sit amet',
			'rank' => 'Lorem ipsum dolor sit ame',
			'workplace' => 'Lorem ipsum dolor sit amet',
			'postcode' => 'Lorem ',
			'address1' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'building' => 'Lorem ipsum dolor sit amet',
			'tel' => 'Lorem ipsum d',
			'fax' => 'Lorem ipsum d',
			'business_contact' => 'Lorem ipsum d',
			'personal_contact' => 'Lorem ipsum d',
			'mail_address' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'point_exchange_enable_flag' => 1,
			'disable_flag' => 1,
			'point_expiration_contact_flag' => 1,
			'internal_memo' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-10-07 10:08:59',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-10-07 10:08:59',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
