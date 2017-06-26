<?php

use Mockery as m;

class WebTestCase extends \There4\Slim\Test\WebTestCase
{

    // Run before each unit test
    public function setUp()
    {
        parent::setup();

        // Mock ApiService by default to prevent http requests
        $this->mockApiService();

        // Mock session by default
        $this->mockSession();

        // Mock logger by default
        $this->mockLogger();
    }

    // Run after each unit test
    public function tearDown()
    {
        m::close();
    }

    // Return the configured Slim App object
    public function getSlimInstance()
    {
        return require dirname(dirname(__DIR__)) . '/bootstrap.php';
    }

    protected function makeImageInfoResponse($exists=true, $data=[])
    {
        $faker = Faker\Factory::create();
        if ($exists) {
            $resp = (object) [
                'pages' => [
                    '123' => (object) [
                        'imageinfo' => [
                            (object) [
                                'sha1' => array_get($data, 'sha1', sha1($faker->text)),
                                'mime' =>  array_get($data, 'sha1', 'image/jpeg'),
                                'url' => 'http://dummy',
                                'width' =>  array_get($data, 'width', 800),
                                'height' => array_get($data, 'width', 600),
                                'descriptionurl' => 'http://dummy2',
                            ]
                        ]
                    ]
                ]
            ];
        } else {
            $resp = (object) [
                'pages' => [
                    '-1' => (object) [
                        'missing' => ''
                    ]
                ]
            ];
        }

        return new CropTool\ImageInfoResponse($resp);
    }

    protected function getWikiTextMock($text)
    {
        $mock = m::mock(CropTool\WikiText::class, [
            'text' => $text,
        ]);

        return $mock;
    }

    protected function mockApiService($imageInforesponses=[])
    {
        if (!count($imageInforesponses)) {
            $imageInforesponses = [$this->makeImageInfoResponse()];
        }

        $service = m::mock(CropTool\ApiService::class, [
            'getSite' => 'commons.wikimedia.org',
        ]);
        $service->shouldReceive('getImageinfo')->andReturnValues($imageInforesponses);

        $this->app->getContainer()->set(CropTool\ApiService::class, $service);

        return $service;
    }

    protected function mockUserService($username = 'Test User')
    {
        $service = m::mock(CropTool\UserService::class, [
            'loggedin' => true,
        ]);
        $service->username = $username;
        $this->app->getContainer()->set(CropTool\UserService::class, $service);

        return $service;
    }

    protected function mockAuthService()
    {
        $service = m::mock(CropTool\AuthServiceInterface::class, [
            'isAuthorized' => true,
        ])->shouldIgnoreMissing();
        $this->app->getContainer()->set(CropTool\AuthServiceInterface::class, $service);

        return $service;
    }

	protected function mockSession()
	{
		$service = new SessionMock();
		$this->app->getContainer()->set(CropTool\SessionInterface::class, $service);

		return $service;
	}

    protected function mockLogger()
    {
        $service = m::mock(Psr\Log\LoggerInterface::class)->shouldIgnoreMissing();
        $this->app->getContainer()->set(Psr\Log\LoggerInterface::class, $service);

        return $service;
    }
}
