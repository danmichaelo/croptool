<?php

use Monolog\Logger;

/**
* Simple MediaWiki API client
*/
class MwApiClient
{

    /**
     * The API endpoint
     */
    public $api_url; // = 'https://commons.wikimedia.org/w/api.php';

    /**
     * The remote site name
     */
    protected $site;

    public $cookie_file = '../data/cookiejar.txt';
    public $user_agent;
    protected $logger;
    protected $oauth;
    public $authError;

    /**
     * Username of the authorized user
     */
    protected $username = null;

    /**
     * MwApiClient constructor.
     * @param string $site
     * @param OAuthConsumer $oauth
     * @param Logger $logger
     * @param array $config
     */
    public function __construct($site, OAuthConsumer $oauth, Logger $logger, $config = array())
    {
        $this->site = $site;
        $this->api_url = 'https://' . $site . '/w/api.php';
        $this->logger = $logger;
        $this->oauth = $oauth;
        $this->user_agent = array_get($config, 'userAgent', '');
    }

    public function getSite()
    {
        return $this->site;
    }

    /**
     * Returns true if authorized, or false if not
     */
    public function authorized()
    {
        if (is_null($this->username)) {
            $this->checkAuthorization();
        }
        return !is_null($this->username);
    }

    public function getAuthorizationWarnings()
    {
        $w = $this->oauth->warnings;
        if (isset($this->authError) && $this->authError->code == 'mwoauth-invalid-authorization') {
            $w[] = OAuthConsumer::INVALID_COOKIE;
        }
        return $w;
    }

    public function authorize()
    {
        $this->oauth->doAuthorizationRedirect();
    }

    private function checkAuthorization()
    {
        $this->username = null;
        if (!$this->oauth->hasTokenSecret()) {
            // No reason to make a request if we have no token
            return false;
        }

        // Check authorization
        // First fetch the username
        $res = $this->request( array(
            'format' => 'json',
            'action' => 'query',
            'meta' => 'userinfo',
        ) );

        if ( isset( $res->error->code ) && $res->error->code === 'mwoauth-invalid-authorization' ) {
            $this->authError = $res->error;
            // We're not authorized!
            return false;
        }

        if ( !isset( $res->query->userinfo ) ) {
            $this->authError = 'Bad API response';
            return false;
        }
        if ( isset( $res->query->userinfo->anon ) ) {
            $this->authError = 'Not logged in';
            return false;
        }
        $this->username = $res->query->userinfo->name;
    }

    /**
     * Returns the username of the authorized user or NULL if none
     */
    public function getUser()
    {
        return $this->authorized() ? $this->username : null;
    }

    public function logout()
    {
        $this->oauth->doLogout();
        $this->username = null;
        $this->authError = 'Not logged in';
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

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_POST, true );
        if ($multipart == true) {
            $oauthHeader = $this->oauth->signRequestAndReturnHeader( 'POST', $this->api_url );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $args );
        } else {
            $oauthHeader = $this->oauth->signRequestAndReturnHeader( 'POST', $this->api_url, $args );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($args) );
        }

        curl_setopt( $ch, CURLOPT_URL, $this->api_url );
        if ($signed) {
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array($oauthHeader) );
        }
        curl_setopt( $ch, CURLOPT_USERAGENT, $this->user_agent );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

//        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = curl_exec( $ch );

        if ( !$data ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            throw new \RunTimeException('Curl error: ' . htmlspecialchars( curl_error( $ch ) ));
        }

        curl_close($ch);

        $data = json_decode( $data );
        if (isset($data->error)) {
            $this->logger->addError('[api] Received error: ' . $data->error->code . ' : ' . $data->error->info);
        }

        return $data;
    }

    /**
     * @param string $title
     * @return ImageInfo|null
     */
    public function getImageInfo($title)
    {
        if (!$this->authorized()) {
            return null;
        }

        $response = $this->request(array(
            'action' => 'query',
            'prop' => 'imageinfo',
            'format' => 'json',
            'iiprop' => 'url|size|sha1|mime',
            'iilimit' => 10,
            'titles' => 'File:' . $title
        ));

        foreach ($response->query->pages as $pageid => $page) {
            if ($pageid == '-1') {
                return null;
            }
            return new ImageInfo($page);
        }
    }

    /**
     * Request an edit token
     * Returns the edit token, or FALSE on failure
     */
    public function getEditToken()
    {
        $response = $this->request(array(
            'action' => 'query',
            'meta' => 'tokens',
            'type' => 'csrf'
        ));

        return $response->query->tokens->csrftoken;
    }

    /**
     * Check if a page exists
     * Returns true if it does, false if not
     */
    public function pageExists($title)
    {

        $query = array(
            'action' => 'query',
            'prop' => 'pageprops',
            'format' => 'json',
            'titles' => 'File:' . $title
        );

        $response = $this->request($query, false, false);

        if (isset($response->error)) {
            throw new Exception('Error: ' . $response->error->info . ' (' . $response->error->code . ')');
        }

        foreach ($response->query->pages as $pageid => $page) {
            if ($pageid == '-1') {
                return false;
            }
            return true;
        }

    }

}