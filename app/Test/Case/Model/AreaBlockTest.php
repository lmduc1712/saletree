<?php
App::uses('AreaBlock', 'Model');

/**
 * AreaBlock Test Case
 *
 */
class AreaBlockTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->AreaBlock = ClassRegistry::init('AreaBlock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AreaBlock);

		parent::tearDown();
	}

}
