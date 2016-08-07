<?php

class AuthTest extends WebTestCase
{
    public function testLoginRoute()
    {
        $this->client->get('/api/auth/login');

        $this->assertEquals(302, $this->client->response->getStatusCode());
    }

    public function authCallbackRoute()
    {
        $this->client->get('/api/auth/callback');

        $this->assertEquals(302, $this->client->response->getStatusCode());
    }

    public function testLogoutRoute()
    {
        $this->mockAuthService();

        $this->client->get('/api/auth/logout');

        $body = json_decode($this->client->response->getBody(), true);
        $this->assertEquals(200, $this->client->response->getStatusCode());
        $this->assertEquals(['user' => null], $body);
    }

}
