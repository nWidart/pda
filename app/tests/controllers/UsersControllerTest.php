<?php

class UsersControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'dashboard');
		$this->assertTrue($response->isOk());
	}
}
