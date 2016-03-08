<?php
/**
 * UngVienFixture
 *
 */
class UngVienFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'ung_vien';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'STT' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'hoten' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dienthoai' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vitri' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mavitri' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'birth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gioitinh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'tinhtrang' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trinhdo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'exp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nguon' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'why' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'madiem' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'timestamp', 'null' => true),
		'ip' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ca1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ca2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ca3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ca4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'evenday' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'oddday' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'sinhvien' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'dilam' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'dinh_kem' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'st7' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ct7' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'viafb' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'viag' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'viaintro' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'STT', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'STT' => 1,
			'hoten' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'dienthoai' => 'Lorem ipsum dolor sit amet',
			'vitri' => 'Lorem ipsum dolor sit amet',
			'mavitri' => 'Lorem ipsum dolor sit amet',
			'birth' => 'Lorem ipsum dolor sit amet',
			'gioitinh' => 'Lorem ipsum dolor sit amet',
			'tinhtrang' => 'Lorem ipsum dolor sit amet',
			'trinhdo' => 'Lorem ipsum dolor sit amet',
			'exp' => 'Lorem ipsum dolor sit amet',
			'nguon' => 'Lorem ipsum dolor sit amet',
			'why' => 'Lorem ipsum dolor sit amet',
			'madiem' => 'Lorem ipsum dolor sit amet',
			'date' => 1455888385,
			'ip' => 'Lorem ipsum dolor sit amet',
			'ca1' => 'Lorem ipsum dolor sit amet',
			'ca2' => 'Lorem ipsum dolor sit amet',
			'ca3' => 'Lorem ipsum dolor sit amet',
			'ca4' => 'Lorem ipsum dolor sit amet',
			'evenday' => 'Lorem ipsum dolor sit amet',
			'oddday' => 'Lorem ipsum dolor sit amet',
			'sinhvien' => 'Lorem ipsum dolor sit amet',
			'dilam' => 'Lorem ipsum dolor sit amet',
			'dinh_kem' => 'Lorem ipsum dolor sit amet',
			'st7' => 'Lorem ipsum dolor sit amet',
			'ct7' => 'Lorem ipsum dolor sit amet',
			'viafb' => 1,
			'viag' => 1,
			'viaintro' => 1
		),
	);

}
