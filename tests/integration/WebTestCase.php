<?php

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Slim\App;

class WebTestCase extends TestCase
{
	protected App $app;
	/** HTTP test client compatible with the legacy test API. */
	protected object $client;

	// Run before each unit test
	protected function setUp(): void
	{
		parent::setUp();

		$this->app = $this->getSlimInstance();

		// Mock ApiService by default to prevent http requests
		$this->mockApiService();

		// Mock session by default
		$this->mockSession();

		// Mock logger by default
		$this->mockLogger();

		// Initialize the HTTP test client
		$this->setUpClient();
	}

	// Run after each unit test
	protected function tearDown(): void
	{
		m::close();
		parent::tearDown();
	}

	// Return the configured Slim App object
	public function getSlimInstance(): App
	{
		return require dirname(__DIR__, 2) . '/bootstrap.php';
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
                        ],
                        'categories' => [
                            (object)[
                                'ns' => 14,
                                'title' => 'Category:Test Category 1',
                            ],
                            (object)[
                                'ns' => 14,
                                'title' => 'Category:Test Category 2',
                            ],
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

        return new CropTool\QueryResponse($resp);
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
        $service = m::mock(\CropTool\Auth\UserService::class, [
            'loggedin' => true,
        ]);
        $service->username = $username;
        $this->app->getContainer()->set(\CropTool\Auth\UserService::class, $service);

        return $service;
    }

    protected function mockAuthService()
    {
        $service = m::mock(\CropTool\Auth\AuthServiceInterface::class, [
            'isAuthorized' => true,
        ])->shouldIgnoreMissing();
        $this->app->getContainer()->set(\CropTool\Auth\AuthServiceInterface::class, $service);

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

	// Initialize the HTTP test client
	private function setUpClient() {
		$this->client = new class($this->app) {
			public ?\Psr\Http\Message\ResponseInterface $response = null;

			public function __construct(private \Slim\App $app)
			{
			}

			public function get(string $uri): void
			{
				$this->request('GET', $uri);
			}

			public function post(string $uri, array $data = []): void
			{
				$this->request('POST', $uri, $data);
			}

			private function request(string $method, string $uri, array $data = []): void
			{
				$factory = new \Slim\Psr7\Factory\ServerRequestFactory();
				$request = $factory->createServerRequest($method, $uri);

				if ($data) {
					$request = $request->withParsedBody($data);
				}

				$this->response = $this->app->handle($request);
			}
		};		
	}
}
