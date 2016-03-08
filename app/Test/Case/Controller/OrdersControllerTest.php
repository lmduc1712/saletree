<?php
App::uses('OrdersController', 'Controller');

/**
 * OrdersController Test Case
 *
 */
class OrdersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.order',
		'app.mr',
		'app.lunch',
		'app.provider',
		'app.mr_campaign',
		'app.delivery',
		'app.point_log'
	);

}
