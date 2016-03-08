<?php
App::uses('ProductGenre', 'Model');

/**
 * ProductGenre Test Case
 *
 */
class ProductGenreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_genre',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductGenre = ClassRegistry::init('ProductGenre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductGenre);

		parent::tearDown();
	}

}
