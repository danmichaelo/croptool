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

    /**
     * Username of the authorized user
     */
    protected $username = null;

    function __construct($site, OAuthConsumer $oauth = null, Curl $curl = null, Logger $logger = null, $config = array())
    {
        $this->site = $site;
        $this->api_url = 'https://' . $site . '/w/api.php';

        $this->logger = $logger ?: new Logger;

        $this->oauth = $oauth ?: new OAuthConsumer;
        $this->user_agent = array_get($config, 'userAgent', '');

        $this->curl = $curl ?: new Curl;
        $this->curl->cookie_file = $this->cookie_file;
        $this->curl->user_agent = $this->user_agent;
        $this->curl->follow_redirects = false;
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
        //curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_USERAGENT, $this->user_agent );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        $data = curl_exec( $ch );
        $info = curl_getinfo($ch);
        curl_close($ch);
        if ( !$data ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Curl error: ' . htmlspecialchars( curl_error( $ch ) );
            exit(0);
        }

        $data = json_decode( $data );
        if (isset($data->error)) {
            $this->logger->addError('[api] Received error: ' . $data->error->code . ' : ' . $data->error->info);
        }

        //print_r($info);
        //print_r($args);
        //print_r($data);
        //die;
        return $data;
    }

    public function getImageInfo($title)
    {
        if (!$this->authorized()) {
            return array('error' => 'not_logged_in');
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
                return false;
            }
            return $page;
        }
    }

    /**
     * Request an edit token
     * Returns the edit token, or FALSE on failure
     */
    public function getEditToken($title)
    {

        if (!$this->authorized()) {
            return array('error' => 'not_logged_in');
        }

        $response = $this->request(array(
            'action' => 'query',
            'prop' => 'info',
            'intoken' => 'edit',
            'titles' => 'File:' . $title
        ));

        foreach ($response->query->pages as $pageid => $page) {
            if ($pageid == '-1') {
                return false;
            }
            return $page->edittoken;
        }
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