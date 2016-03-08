<?php
App::uses('RankingSum', 'Model');

/**
 * RankingSum Test Case
 *
 */
class RankingSumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ranking_sum',
		'app.lunch',
		'app.provider',
		'app.main_ingredient',
		'app.lunch_other_info',
		'app.option',
		'app.provider_coverage',
		'app.area',
		'app.prefecture',
		'app.area_block',
		'app.provider_holiday',
		'app.provider_info',
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
		'app.point_exchange_delivery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RankingSum = ClassRegistry::init('RankingSum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RankingSum);

		parent::tearDown();
	}

}
