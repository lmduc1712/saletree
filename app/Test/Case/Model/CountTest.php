<?php
App::uses('Count', 'Model');

/**
 * Count Test Case
 *
 */
class CountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.count'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Count = ClassRegistry::init('Count');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Count);

		parent::tearDown();
	}

}
