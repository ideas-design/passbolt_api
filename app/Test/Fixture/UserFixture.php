<?php
/**
 * User Fixture
 *
 * @copyright   Copyright 2012, Passbolt.com
 * @license     http://www.passbolt.com/license
 * @package     app.Test.Fixture.UserFixture
 * @since       version 2.12.9
 */
class UserFixture extends CakeTestFixture {

	public $useDbConfig = 'test';

	public $import = 'User';

	public function init() {
		$this->records = array(
			// guest role
			array(
				'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c4c',
				'username' => 'anonymous@passbolt.com',
				'role_id' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c', // see default role.sql
				'password' => 'this will be replaced at runtime',
				'active' => 1,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			),
			// user role
			array(
				'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c4a',
				'username' => 'user@passbolt.com',
				'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
				'password' => 'password',
				'active' => 1,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			),
			array(
				'id' => 'bbd56042-cccc-11e1-a0c5-080027796c4a',
				'username' => 'lisa@passbolt.com',
				'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
				'password' => 'password',
				'active' => 1,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			),
			array(
				'id' => 'bbd56042-bbbb-11e1-a0c5-080027796c4a',
				'username' => 'bart@passbolt.com',
				'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
				'password' => 'password',
				'active' => 1,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			),
			// user role - inactive
			array(
				'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c3a',
				'username' => 'inactive@passbolt.com',
				'role_id' => '0208f57a-c5cd-11e1-a0c5-080027796c4c',
				'password' => 'password',
				'active' => 0,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			),
			// admin role
			array(
				'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c4b',
				'username' => 'admin@passbolt.com',
				'role_id' => '142c1188-c5cd-11e1-a0c5-080027796c4c',
				'password' => 'this will be replaced at runtime',
				'active' => 1,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			),
			// root role
			array(
				'id' => 'bbd56042-c5cd-11e1-a0c5-080027796c4e',
				'username' => 'root@passbolt.com',
				'role_id' => '142c1340-c5cd-11e1-a0c5-080027796c4c',
				'password' => 'this will be replaced at runtime',
				'active' => 1,
				'created' => '2012-07-04 13:45:11',
				'modified' => '2012-07-04 13:45:14',
				'created_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c',
				'modified_by' => '0208f3a4-c5cd-11e1-a0c5-080027796c4c'
			)
		);
		parent::init();
	}
}