<?php
App::uses('LunchDetail', 'Model');

/**
 * LunchDetail Test Case
 *
 */
class LunchDetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lunch_detail',
		'app.lunch',
		'app.provider',
		'app.main_ingredient',
		'app.lunch_other_info',
		'app.provider_info',
		'app.provider_coverage',
		'app.area',
		'app.prefecture',
		'app.area_block',
		'app.provider_holiday',
		'app.ranking_sum',
		'app.lunch_option_detail',
		'app.campaign',
		'app.order_detail',
		'app.order',
		'app.mr',
		'app.mr_point',
		'app.campaign_target',
		'app.mr_target',
		'app.delivery',
		'app.point_log',
		'app.point_exchange',
		'app.point_exchange_delivery',
		'app.lunch_genre',
		'app.lunch_option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LunchDetail = ClassRegistry::init('LunchDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LunchDetail);

		parent::tearDown();
	}

}
