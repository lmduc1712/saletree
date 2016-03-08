<?php
App::uses('ProviderInfo', 'Model');

/**
 * ProviderInfo Test Case
 *
 */
class ProviderInfoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provider_info',
		'app.provider',
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
		'app.point_exchange_delivery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProviderInfo = ClassRegistry::init('ProviderInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProviderInfo);

		parent::tearDown();
	}

}
