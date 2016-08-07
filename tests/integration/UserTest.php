<?php

class UserTest extends WebTestCase
{
    public function testUserIsLoggedIn()
    {
        $this->client->get('/api/auth/user');

        $this->assertEquals(401, $this->client->response->getStatusCode());
    }

    public function testUserIsNotLoggedIn()
    {
        $this->mockUserService('Test User');

        $this->client->get('/api/auth/user');
        $response = $this->client->response;
        $body = json_decode($response->getBody());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Test User", $body->user);
    }

}
