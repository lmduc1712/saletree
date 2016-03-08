<?php
App::uses('ProviderCoverage', 'Model');

/**
 * ProviderCoverage Test Case
 *
 */
class ProviderCoverageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provider_coverage',
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
		'app.point_exchange_delivery',
		'app.area_block',
		'app.area',
		'app.prefecture'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProviderCoverage = ClassRegistry::init('ProviderCoverage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProviderCoverage);

		parent::tearDown();
	}

}
