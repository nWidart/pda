<?php

/**
* UserControllerTest
*/
class UserControllerTest extends TestCase
{
    public function testShoudlLogin()
    {
        $this->requestAction('GET', 'AuthController@getLogin');
        $this->assertRequestOk();
    }
}
