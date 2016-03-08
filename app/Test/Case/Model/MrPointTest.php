<?php
App::uses('MrPoint', 'Model');

/**
 * MrPoint Test Case
 *
 */
class MrPointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mr_point',
		'app.mr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MrPoint = ClassRegistry::init('MrPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MrPoint);

		parent::tearDown();
	}

}
