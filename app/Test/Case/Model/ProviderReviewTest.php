<?php
App::uses('ProviderReview', 'Model');

/**
 * ProviderReview Test Case
 *
 */
class ProviderReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provider_review',
		'app.provider',
		'app.main_ingredient',
		'app.lunch',
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
		'app.order_lunch_option',
		'app.lunch_option',
		'app.lunch_option_detail',
		'app.lunch_genre',
		'app.lunch_other_info',
		'app.ranking_sum',
		'app.lunch_detail',
		'app.payment_method',
		'app.provider_info',
		'app.provider_coverage',
		'app.area',
		'app.prefecture',
		'app.area_block',
		'app.provider_holiday'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProviderReview = ClassRegistry::init('ProviderReview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProviderReview);

		parent::tearDown();
	}

}
