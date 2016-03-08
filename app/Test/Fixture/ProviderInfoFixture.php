<?php
/**
 * ProviderInfoFixture
 *
 */
class ProviderInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'provider_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => '"LP" + YYYYMMDD + 001~', 'charset' => 'utf8'),
		'deliverable_day_before' => array('type' => 'date', 'null' => false, 'default' => null),
		'deliverable_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'order_deadline_comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_free_amount' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'posted_price_min' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'posted_price_max' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'provider_announce' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'delivery_area_comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'creator' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modifier' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'provider_id', 'unique' => 1)
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
			'provider_id' => 'Lorem ipsum',
			'deliverable_day_before' => '2015-03-03',
			'deliverable_time' => '09:31:00',
			'order_deadline_comment' => 'Lorem ipsum dolor sit amet',
			'delivery_free_amount' => 1,
			'posted_price_min' => 1,
			'posted_price_max' => 1,
			'provider_announce' => 'Lorem ipsum dolor sit amet',
			'delivery_area_comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-03-03 09:31:00',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-03-03 09:31:00',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
