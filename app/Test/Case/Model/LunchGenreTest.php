<?php
App::uses('LunchGenre', 'Model');

/**
 * LunchGenre Test Case
 *
 */
class LunchGenreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lunch_genre',
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
		$this->LunchGenre = ClassRegistry::init('LunchGenre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LunchGenre);

		parent::tearDown();
	}

}
