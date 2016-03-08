<?php
App::uses('LunchOtherInfo', 'Model');

/**
 * LunchOtherInfo Test Case
 *
 */
class LunchOtherInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lunch_other_info',
		'app.lunch',
		'app.provider',
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
		$this->LunchOtherInfo = ClassRegistry::init('LunchOtherInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LunchOtherInfo);

		parent::tearDown();
	}

}
