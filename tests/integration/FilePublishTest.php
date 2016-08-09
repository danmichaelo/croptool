<?php

use CropTool\WikiText;
use Mockery as m;

class FilePublishTest extends WebTestCase
{
    public function testItRequiresLogin()
    {
        $this->client->post('/api/file/publish');

        $this->assertEquals(401, $this->client->response->getStatusCode());
    }

    public function testItCanOverwrite()
    {
        $faker = Faker\Factory::create();
        $existingFile = $faker->text(20) . 'jpg';
        $editSummary = $faker->text(20);
        $wikitext = new WikiText($faker->text);

        $this->mockUserService();
        $this->mockApiService()
            ->shouldReceive('getWikitext')->once()->andReturn($wikitext)
            ->shouldReceive('upload')->once()->with(
                $existingFile,
                '/_cropped.jpg$/',
                $editSummary,
                strval($wikitext),
                true
            )->andReturn(['success' => true]);

        $this->client->post('/api/file/publish', [
            'title' => $existingFile,
            'overwrite' => 'overwrite',
            'comment' => $editSummary,
        ]);
        $body = json_decode($this->client->response->getBody());

        $this->assertEquals(200, $this->client->response->getStatusCode());
        $this->assertTrue($body->success);
    }

    public function testItCanUploadANewFile()
    {
        $faker = Faker\Factory::create();
        $existingFile = $faker->text(20) . 'jpg';
        $newFile = $faker->text(20) . 'jpg';
        $editSummary = $faker->text(20);
        $wikitext = new WikiText($faker->text);

        $this->mockUserService();
        $this->mockApiService([$this->makeImageInfoResponse(true), $this->makeImageInfoResponse(false)])
            ->shouldReceive('getWikitext')->once()->andReturn($wikitext)
            ->shouldReceive('upload')->once()->with(
                $newFile,
                '/_cropped.jpg$/',
                $editSummary,
                "/^$wikitext/",
                false
                )->andReturn(['success' => true])
            ->shouldReceive('savePage')->once()->andReturn([]);

        $this->client->post('/api/file/publish', [
            'title' => $existingFile,
            'filename' => $newFile,
            'comment' => $editSummary,
        ]);
        $body = json_decode($this->client->response->getBody());

        $this->assertEquals(200, $this->client->response->getStatusCode());
        $this->assertTrue($body->success);
    }

    /**
     * @expectedException RuntimeException
     * @expectedExceptionMessageRegExp /File already exists/
     */
    public function testItWillNotOverwriteWhenUploadingANewFile()
    {
        $faker = Faker\Factory::create();
        $existingFile = $faker->text(20) . 'jpg';
        $newFile = $faker->text(20) . 'jpg';
        $editSummary = $faker->text(20);

        $wikitext = new WikiText($faker->text);

        $this->mockUserService();
        $this->mockApiService([$this->makeImageInfoResponse(true), $this->makeImageInfoResponse(true)])
            ->shouldReceive('getWikitext')->once()->andReturn($wikitext)
            ->shouldReceive('upload')->never()
            ->shouldReceive('savePage')->never();

        $this->client->post('/api/file/publish', [
            'title' => $existingFile,
            'filename' => $newFile,
            'comment' => $editSummary,
        ]);
    }

}
