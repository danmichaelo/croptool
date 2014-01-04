<?php

require_once('Cryptastic.php');

// See also: http://oauth.googlecode.com/svn/code/php/OAuth.php

class OAuthConsumer {

    /**
     * A file containing the following keys:
     * - agent: The HTTP User-Agent to use
     * - consumerKey: The "consumer token" given to you when registering your app
     * - consumerSecret: The "secret token" given to you when registering your app
     * - localPassphrase: The (base64 encoded) key used for encrypting cookie content
     */
    protected $inifile = '../oauth.ini';

    /**
     * The Special:OAuth URL.
     * Note that /wiki/Special:OAuth sometimes fails, while
     * index.php?title=Special:OAuth works fine.
     */
    protected $mwOAuthUrl = 'https://www.mediawiki.org/w/index.php?title=Special:OAuth';

    /**
     * The interwiki prefix for the OAuth central wiki.
     */
    protected $mwOAuthIW = 'mw';

    /**
     * The API endpoint
     */
    protected $apiUrl = 'https://commons.wikimedia.org/w/api.php';

    /**
     * Set this to Special:MyTalk on the above wiki
     */
    protected $mytalkUrl = 'https://commons.wikimedia.org/wiki/Special:MyTalk#Hello.2C_world';

    private $gUserAgent = '';
    private $gConsumerKey = '';
    private $gConsumerSecret = '';
    private $gTokenKey = '';
    private $gTokenSecret = '';
    private $signatureMethod = 'HMAC-SHA1'; // TODO: 'RSA-SHA1'

    /**
     * Private key file used to sign OAuth requests using the RSA-SHA1 method.
     */
    protected $rsaPrivateKeyFile = '../mykey.pem';

    /**
     * public key file used with signed OAuth requests using the RSA-SHA1 method.
     */
    protected $rsaPublicKeyFile = '../mykey.public';

    /**
     * Username of the authorized user
     */
    protected $username = '';

    /**
     * Object carrying out encryption and decryption
     */
    protected $cipher;

    /**
     * The hostname, most likely 'tools.wmflabs.org'
     */
    protected $hostname;

    /**
     * Are we on a test/development server?
     */
    protected $testingEnv = false;

    public function __construct($hostname, $testingEnv)
    {

        $this->hostname = $hostname;
        $this->testingEnv = $testingEnv;

        if (isset($_GET['title'])) {
            // Store the title, so we can retrieve if after
            // having having authenticated at the OAuth endpoint
            $_SESSION['title'] = $_GET['title'];
        }

        // Read the ini file
        $ini = parse_ini_file( $this->inifile );

        if ( $ini === false ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'The ini file could not be read';
            exit(0);
        }
        if ( !isset( $ini['agent'] ) ||
            !isset( $ini['consumerKey'] ) ||
            !isset( $ini['consumerSecret'] )
        ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Required configuration directives not found in ini file';
            exit(0);
        }
        $this->gUserAgent = $ini['agent'];
        $this->gConsumerKey = $ini['consumerKey'];
        $this->gConsumerSecret = $ini['consumerSecret'];
        $this->cookieKey = base64_decode($ini['localPassphrase']);

        $this->cipher = new Cryptastic();

        // Load the user token (request or access) from the session
        $this->gTokenKey = '';
        $this->gTokenSecret = '';

        // Grab request token from SESSION
        if ( isset( $_SESSION['mwKey'] ) && isset( $_SESSION['mwSecret'] ) ) {
            $this->gTokenKey = $_SESSION['mwKey'];
            $this->gTokenSecret = $_SESSION['mwSecret'];
            unset($_SESSION['mwKey']);
            unset($_SESSION['mwSecret']);

        // or grab permanent token from COOKIE
        } else if ( isset( $_COOKIE['mwKey'] ) && isset( $_COOKIE['mwSecret'] ) ) {
            $this->gTokenKey = $this->cipher->decrypt($_COOKIE['mwKey'], $this->cookieKey, true);
            $this->gTokenSecret = $this->cipher->decrypt($_COOKIE['mwSecret'], $this->cookieKey, true);
        }

        // Fetch the access token if this is the callback from requesting authorization
        if ( isset( $_GET['oauth_verifier'] ) && $_GET['oauth_verifier'] ) {
            $this->fetchAccessToken();
            header('Location: ./?title=' . urlencode(str_replace(' ', '_', $_SESSION['title'])));
            exit;
        }

        // Take any requested action
        switch ( isset( $_GET['action'] ) ? $_GET['action'] : '' ) {

            case 'authorize':
                $this->doAuthorizationRedirect();
                return;

        }

        $this->authorized = $this->checkAuthorization();

    }

    private function checkAuthorization()
    {
        // Check authorization
        // First fetch the username
        $res = $this->doApiQuery( array(
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
        return true;
    }

    /**
     * Handle a callback to fetch the access token
     * @return void
     */
    private function fetchAccessToken() {

        $url = $this->mwOAuthUrl . '/token';
        $url .= strpos( $url, '?' ) ? '&' : '?';
        $url .= http_build_query( array(
            'format' => 'json',

            // OAuth information
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $this->gTokenKey, // request token
            'oauth_verifier' => $_GET['oauth_verifier'],
            'oauth_version' => '1.0',
            'oauth_nonce' => md5( microtime() . mt_rand() ),
            'oauth_timestamp' => time(),

            // We're using secret key signatures here.
            'oauth_signature_method' => $this->signatureMethod,
        ) );

        $signature = $this->signRequest( 'GET', $url );

        $url .= "&oauth_signature=" . urlencode( $signature );
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        //curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_USERAGENT, $this->gUserAgent );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        $data = curl_exec( $ch );
        if ( !$data ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Curl error: ' . htmlspecialchars( curl_error( $ch ) );
            exit(0);
        }
        curl_close( $ch );
        $token = json_decode( $data );

        if ( is_object( $token ) && isset( $token->error ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Error retrieving token: ' . htmlspecialchars( $token->error );
            exit(0);
        }
        if ( !is_object( $token ) || !isset( $token->key ) || !isset( $token->secret ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Invalid response from token request';
            exit(0);
        }

        // Save the access token

        $twoYears = time() + 60 * 60 * 24 * 365 * 2;

        $this->gTokenKey = $token->key;
        if (!setcookie('mwKey',
            $this->cipher->encrypt($this->gTokenKey, $this->cookieKey, true),
            $twoYears,
            dirname( $_SERVER['SCRIPT_NAME'] ),
            $this->hostname,
            !$this->testingEnv,  // only secure (https)
            true   // httponly
        )) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Failed to store key';
            exit(0);
        }

        $this->gTokenSecret = $token->secret; // 40 bytes
        if (!setcookie('mwSecret',
            $this->cipher->encrypt($this->gTokenSecret, $this->cookieKey, true), // ~ 150 bytes
            $twoYears,
            dirname( $_SERVER['SCRIPT_NAME'] ),
            $this->hostname,
            !$this->testingEnv,  // only secure (https) unless we are on a testing server
            true   // httponly
        )) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Failed to store secret. Length: ' . strlen($this->cipher->encrypt($this->gTokenSecret, $this->cookieKey, true));
            exit(0);
        }

    }

    /**
     * Utility function to sign a request
     *
     * Note this doesn't properly handle the case where a parameter is set both in
     * the query string in $url and in $params, or non-scalar values in $params.
     *
     * @param string $method Generally "GET" or "POST"
     * @param string $url URL string
     * @param array $params Extra parameters for the Authorization header or post
     *  data (if application/x-www-form-urlencoded).
     * @return string Signature
     */
    function signRequest( $method, $url, $params = array()) {

        $parts = parse_url( $url );

        // We need to normalize the endpoint URL
        $scheme = isset( $parts['scheme'] ) ? $parts['scheme'] : 'http';
        $host = isset( $parts['host'] ) ? $parts['host'] : '';
        $port = isset( $parts['port'] ) ? $parts['port'] : ( $scheme == 'https' ? '443' : '80' );
        $path = isset( $parts['path'] ) ? $parts['path'] : '';
        if ( ( $scheme == 'https' && $port != '443' ) ||
            ( $scheme == 'http' && $port != '80' ) 
        ) {
            // Only include the port if it's not the default
            $host = "$host:$port";
        }

        // Also the parameters
        $pairs = array();
        parse_str( isset( $parts['query'] ) ? $parts['query'] : '', $query );
        $query += $params;
        unset( $query['oauth_signature'] );
        if ( $query ) {
            $query = array_combine(
                // rawurlencode follows RFC 3986 since PHP 5.3
                array_map( 'rawurlencode', array_keys( $query ) ),
                array_map( 'rawurlencode', array_values( $query ) )
            );
            ksort( $query, SORT_STRING );
            foreach ( $query as $k => $v ) {
                $pairs[] = "$k=$v";
            }
        }

        $toSign = rawurlencode( strtoupper( $method ) ) . '&' .
            rawurlencode( "$scheme://$host$path" ) . '&' .
            rawurlencode( join( '&', $pairs ) );

        if ($this->signatureMethod == 'rsa') {

            /*
             * The RSA-SHA1 signature method uses the RSASSA-PKCS1-v1_5 signature algorithm as defined in
             * [RFC3447] section 8.2 (more simply known as PKCS#1), using SHA-1 as the hash function for
             * EMSA-PKCS1-v1_5. It is assumed that the Consumer has provided its RSA public key in a
             * verified way to the Service Provider, in a manner which is beyond the scope of this
             * specification.
             *   - Chapter 9.3 ("RSA-SHA1")
             */

            $privateKey = openssl_pkey_get_private(file_get_contents($this->rsaPrivateKeyFile));
            if ($privateKey === false) {
                throw new Exception('Unable to open private key file.');
            }

            // Sign using the key
            if (openssl_sign($toSign, $signature, $privateKey) === false) {
                throw new Exception('Unable to sign using the private key file.');
            }

            // Release the key resource
            openssl_free_key($privateKey);

            return base64_encode($signature);

        } else {

            $key = rawurlencode( $this->gConsumerSecret ) . '&' . rawurlencode( $this->gTokenSecret );
            return base64_encode( hash_hmac( 'sha1', $toSign, $key, true ) );

        }

    }

    public function doLogout()
    {
        setcookie('mwKey', '', time() - 3600, dirname( $_SERVER['SCRIPT_NAME'] ), $this->hostname, !$this->testingEnv, true);
        setcookie('mwSecret', '', time() - 3600, dirname( $_SERVER['SCRIPT_NAME'] ), $this->hostname, !$this->testingEnv, true);
        $this->authorized = false;
        $this->gTokenKey = '';
        $this->gTokenSecret = '';
        $this->username = '';
        $this->authError = 'Not logged in';
    }

    /**
     * Request authorization
     * @return void
     */
    function doAuthorizationRedirect() {

        // First, we need to fetch a request token.
        // The request is signed with an empty token secret and no token key.
        $this->gTokenSecret = '';
        $url = $this->mwOAuthUrl . '/initiate';
        $url .= strpos( $url, '?' ) ? '&' : '?';
        $url .= http_build_query( array(
            'format' => 'json',

            // OAuth information
            'oauth_callback' => 'oob', // Must be "oob" for MWOAuth
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_version' => '1.0',
            'oauth_nonce' => md5( microtime() . mt_rand() ),
            'oauth_timestamp' => time(),

            // We're using secret key signatures here.
            'oauth_signature_method' => $this->signatureMethod,
        ) );
        $signature = $this->signRequest( 'GET', $url );
        $url .= "&oauth_signature=" . urlencode( $signature );
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        //curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_USERAGENT, $this->gUserAgent );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        $data = curl_exec( $ch );
        if ( !$data ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Curl error: ' . htmlspecialchars( curl_error( $ch ) );
            exit(0);
        }
        curl_close( $ch );
        $token = json_decode( $data );

        if ( is_object( $token ) && isset( $token->error ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Error retrieving token: ' . htmlspecialchars( $token->error );
            exit(0);
        }
        if ( !is_object( $token ) || !isset( $token->key ) || !isset( $token->secret ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Invalid response from token request';
            exit(0);
        }

        // Now we have the request token, we need to save it for later.
        //session_start();

        $_SESSION['mwKey'] = $token->key;
        $_SESSION['mwSecret'] = $token->secret; // What do we need this for?

        // Then we send the user off to authorize
        $url = $this->mwOAuthUrl . '/authorize';

        $url .= strpos( $url, '?' ) ? '&' : '?';
        $url .= http_build_query( array(
            'oauth_token' => $token->key,
            'oauth_consumer_key' => $this->gConsumerKey,
        ) );
        header( "Location: $url" );
        echo 'Please see <a href="' . htmlspecialchars( $url ) . '">' . htmlspecialchars( $url ) . '</a>';
    }

    /**
     * Send an API query with OAuth authorization
     *
     * @param array $post Post data
     * @param string $enctype Encoding type
     * @return array API results
     */
    function doApiQuery( $post, $multipart = false ) {

        $headerArr = array(
            // OAuth information
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $this->gTokenKey,
            'oauth_version' => '1.0',
            'oauth_nonce' => md5( microtime() . mt_rand() ),
            'oauth_timestamp' => time(),

            // We're using secret key signatures here.
            'oauth_signature_method' => $this->signatureMethod,
        );

        $ch = curl_init();

        curl_setopt( $ch, CURLOPT_POST, true );
        if ($multipart == true) {
            $signature = $this->signRequest( 'POST', $this->apiUrl, $headerArr );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );
        } else {
            $signature = $this->signRequest( 'POST', $this->apiUrl, $post + $headerArr );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($post) );
        }
        $headerArr['oauth_signature'] = $signature;

        $header = array();
        foreach ( $headerArr as $k => $v ) {
            $header[] = rawurlencode( $k ) . '="' . rawurlencode( $v ) . '"';
        }
        $header = array('Authorization: OAuth ' . join( ', ', $header ));

        curl_setopt( $ch, CURLOPT_URL, $this->apiUrl );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
        //curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_USERAGENT, $this->gUserAgent );
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

        //print_r($info);
        //print_r($post);
        //print_r($data);
        //die;
        return json_decode( $data );
    }

    public function isAuthorized()
    {
        return $this->authorized;
    }

    public function getUsername()
    {
        return $this->username;
    }

}
