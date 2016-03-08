<?php
App::uses('MainIngredient', 'Model');

/**
 * MainIngredient Test Case
 *
 */
class MainIngredientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.main_ingredient',
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
		$this->MainIngredient = ClassRegistry::init('MainIngredient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MainIngredient);

		parent::tearDown();
	}

}
