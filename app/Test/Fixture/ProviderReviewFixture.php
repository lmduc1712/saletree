<?php
/**
 * ProviderReviewFixture
 *
 */
class ProviderReviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'key' => 'primary'),
		'provider_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'taste' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'service' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 2, 'unsigned' => false),
		'review' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'used_this_provider' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'used_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'upload_image_url1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'upload_image_url2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'upload_image_url3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'upload_image_url4' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'upload_image_url5' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'approval_flag' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 2, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'creator' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'provider_id' => 'Lorem ipsum',
			'taste' => 1,
			'service' => 1,
			'review' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'used_this_provider' => 1,
			'used_date' => '2015-04-02',
			'upload_image_url1' => 'Lorem ipsum dolor sit amet',
			'upload_image_url2' => 'Lorem ipsum dolor sit amet',
			'upload_image_url3' => 'Lorem ipsum dolor sit amet',
			'upload_image_url4' => 'Lorem ipsum dolor sit amet',
			'upload_image_url5' => 'Lorem ipsum dolor sit amet',
			'approval_flag' => 1,
			'created' => '2015-04-02 19:38:12',
			'creator' => 'Lorem ipsum dolor sit amet',
			'modified' => '2015-04-02 19:38:12',
			'modifier' => 'Lorem ipsum dolor sit amet'
		),
	);

}
