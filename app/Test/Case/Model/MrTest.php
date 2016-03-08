<?php
App::uses('Mr', 'Model');

/**
 * Mr Test Case
 *
 */
class MrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mr',
		'app.mr_campaign',
		'app.mr_point',
		'app.mr_target',
		'app.order',
		'app.point_exchange_delivery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mr = ClassRegistry::init('Mr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mr);

		parent::tearDown();
	}

}
