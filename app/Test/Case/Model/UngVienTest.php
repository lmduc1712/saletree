<?php
App::uses('UngVien', 'Model');

/**
 * UngVien Test Case
 *
 */
class UngVienTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ung_vien'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UngVien = ClassRegistry::init('UngVien');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UngVien);

		parent::tearDown();
	}

}
