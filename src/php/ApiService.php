<?php

namespace CropTool;

use DI\FactoryInterface;
use Psr\Log\LoggerInterface;

/**
 * Simple MediaWiki API client
 */
class ApiService
{

    protected $endpoint;
    protected $container;
    protected $auth;
    protected $logger;
    protected $userAgent;
    protected $site;
    public $calls = 0;

    public function __construct(FactoryInterface $factory, LoggerInterface $logger, AuthServiceInterface $auth, Config $config, $site)
    {
        $this->factory = $factory;
        $this->logger = $logger;
        $this->auth = $auth;
        $this->userAgent = $config->get('userAgent', 'CropTool');
        $this->site = $site;
        $this->endpoint = 'https://' . $site . '/w/api.php';
    }

    public function getSite()
    {
        return $this->site;
    }

    /**
     * Make a request to the MW API
     *
     * @param array $args
     * @param bool $multipart
     * @return array
     */
    public function request($args, $multipart = false, $signed = true)
    {
        $args['format'] = 'json';

        $this->calls += 1;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, true);
        if ($multipart == true) {
            $oauthHeader = $this->auth->signRequestAndReturnHeader('POST', $this->endpoint);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        } else {
            $oauthHeader = $this->auth->signRequestAndReturnHeader('POST', $this->endpoint, $args);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
        }

        curl_setopt($ch, CURLOPT_URL, $this->endpoint);
        if ($signed) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array($oauthHeader));
        }
        curl_setopt($ch, CURLOPT_USERAGENT, $this->userAgent);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data = curl_exec($ch);

        if (!$data) {
            header("HTTP/1.1 500 Internal Server Error");
            throw new \RuntimeException('Curl error: ' . htmlspecialchars(curl_error($ch)));
        }

        curl_close($ch);

        $data = json_decode($data);
        if (isset($data->error)) {
            throw new ApiError('[api] Received error: ' . $data->error->code . ' : ' . $data->error->info);
        }

        return $data;
    }

    /**
     * @param $title
     * @return WikiText
     */
    public function getWikitext($title)
    {
        $response = $this->request([
            'action' => 'parse',
            'prop' => 'wikitext',
            'format' => 'json',
            'page' => 'File:' . $title
        ], false, false);

        return $this->factory->make(WikiText::class, [
            'text' => $response->parse->wikitext->{'*'}
            ]);
    }

    /**
     * @param $title
     * @return ImageInfoResponse
     */
    public function getImageinfo($title, $namespace='File:')
    {
        $response = $this->request([
            'action' => 'query',
            'prop' => 'imageinfo',
            'format' => 'json',
            'iiprop' => 'url|size|sha1|mime',
            'iilimit' => '1',
            'titles' => $namespace . $title
        ]);

        return $this->factory->make(ImageInfoResponse::class, [
            'response' => $response->query
        ]);
    }

    /**
     * Request an edit token
     * Returns the edit token, or FALSE on failure
     */
    public function getEditToken()
    {
        $response = $this->request([
            'action' => 'query',
            'meta' => 'tokens',
            'type' => 'csrf'
        ]);

        return $response->query->tokens->csrftoken;
    }


    /**
     * @param string $title
     * @param string $filename
     * @param string $summary
     * @param string|null $text
     * @param bool $ignoreWarnings
     * @return array
     */
    public function upload($title, $filename, $summary, $text=null, $ignoreWarnings=false)
    {
        $token = $this->getEditToken();

        $args = [
            'action' => 'upload',
            'format' => 'json',
            'filename' => $title,
            'token' => $token,
            'comment' => $summary,
            'file' => (version_compare(PHP_VERSION, '5.5.0') >= 0)
                ? new \CURLFile($filename)
                : '@' . $filename
        ];
        if ($ignoreWarnings) {
            $args['ignorewarnings'] = '1';
        }
        if (!is_null($text)) {
            $args['text'] = $text;
        }
        return $this->request($args, true)->upload;
    }

    /**
     * @param $title
     * @param $text
     * @param $summary
     * @return array
     */
    public function savePage($title, $text, $summary)
    {
        return $this->request([
            'action' => 'edit',
            'format' => 'json',
            'summary' => $summary,
            'token' => $this->getEditToken(),
            'title' => $title,
            'text' => $text
        ]);
    }
}
