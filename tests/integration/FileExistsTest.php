<?php

class FileExistsTest extends WebTestCase
{

    public function testExists()
    {
        $this->mockUserService();
        $apiService = $this->mockApiService([$this->makeImageInfoResponse(true)]);

        $this->client->get('/api/file/exists');
        $body = json_decode($this->client->response->getBody());

        $this->assertEquals(200, $this->client->response->getStatusCode());
        $this->assertTrue($body->exists);
    }

    public function testNotExists()
    {
        $this->mockUserService();
        $apiService = $this->mockApiService([$this->makeImageInfoResponse(false)]);

        $this->client->get('/api/file/exists');
        $body = json_decode($this->client->response->getBody());

        $this->assertEquals(200, $this->client->response->getStatusCode());
        $this->assertFalse($body->exists);
    }

}
