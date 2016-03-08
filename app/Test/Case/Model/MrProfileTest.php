<?php
App::uses('MrProfile', 'Model');

/**
 * MrProfile Test Case
 *
 */
class MrProfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mr_profile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MrProfile = ClassRegistry::init('MrProfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MrProfile);

		parent::tearDown();
	}

}
