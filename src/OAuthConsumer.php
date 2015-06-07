<?php

// See also: http://oauth.googlecode.com/svn/code/php/OAuth.php

class OAuthConsumer {

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
     * Set this to Special:MyTalk on the above wiki
     */
    protected $mytalkUrl = 'https://commons.wikimedia.org/wiki/Special:MyTalk#Hello.2C_world';

    private $gUserAgent = 'CropTool/1.1 (+tools.wmflabs.org/croptool)';
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
     * Object carrying out encryption and decryption
     */
    protected $cipher;

    /**
     * The hostname, most likely 'tools.wmflabs.org'
     */
    protected $hostname;

    /**
     * The base path
     */
    protected $basepath;


    /**
     * Are we on a test/development server?
     */
    protected $testingEnv = false;

    public function __construct($hostname = 'localhost', $basepath = '/', $testingEnv = false, $consumerKey = '', $consumerSecret = '', $localPassphrase = '')
    {

        $this->hostname = $hostname;
        $this->basepath = $basepath;
        $this->testingEnv = $testingEnv;
        $this->gConsumerKey = $consumerKey;
        $this->gConsumerSecret = $consumerSecret;
        $this->cookieKey = base64_decode($localPassphrase);

        $this->cipher = new Cryptastic;

        // Load the user token (request or access) from the session
        $this->gTokenKey = '';
        $this->gTokenSecret = '';

        // Grab temporary request token from SESSION
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
            $this->fetchAccessToken($_GET['oauth_verifier']);
            if (isset($_SESSION['title'])) {
                header('Location: ./?title=' . urlencode(str_replace(' ', '_', $_SESSION['title'])));
            } else {
                header('Location: ./');
            }
            exit;
        }

        // Take any requested action
        switch ( isset( $_GET['action'] ) ? $_GET['action'] : '' ) {

            case 'authorize':
                $this->doAuthorizationRedirect();
                return;

        }

    }

    public function getUserAgent()
    {
        return $this->gUserAgent;
    }

    /**
     * Handle a callback to fetch the access token
     * @return void
     */
    private function fetchAccessToken($oauth_verifier) {

        $url = $this->mwOAuthUrl . '/token';
        $url .= strpos( $url, '?' ) ? '&' : '?';
        $url .= http_build_query( array(
            'format' => 'json',

            // OAuth information
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $this->gTokenKey, // request token
            'oauth_verifier' => $oauth_verifier,
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
            $this->basepath,
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
            $this->basepath,
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
        setcookie('mwKey', '', time() - 3600, $this->basepath, $this->hostname, !$this->testingEnv, true);
        setcookie('mwSecret', '', time() - 3600, $this->basepath, $this->hostname, !$this->testingEnv, true);

        // The domain is sometimes prepended by a dot (http://stackoverflow.com/q/2285010):
        // To make sure the cookies are deleted:
        setcookie('mwKey', '', time() - 3600, $this->basepath, '.' . $this->hostname, !$this->testingEnv, true);
        setcookie('mwSecret', '', time() - 3600, $this->basepath, '.' . $this->hostname, !$this->testingEnv, true);
        setcookie('mwKey', '', time() - 3600, $this->basepath, '', !$this->testingEnv, true);
        setcookie('mwSecret', '', time() - 3600, $this->basepath, '', !$this->testingEnv, true);

        $this->gTokenKey = '';
        $this->gTokenSecret = '';
    }

    /**
     * Request authorization
     * @return void
     */
    function doAuthorizationRedirect() {

        // First, we need to fetch a temporary request token.
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
     * Sign request and return OAuth header for use with an API request
     * @param string $method  HTTP method
     * @param string $url  API URL
     * @param array $post Post data
     *
     * @return string
     */
    public function signRequestAndReturnHeader($method, $url, $data = [])
    {
        $headers = array(
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $this->gTokenKey,
            'oauth_version' => '1.0',
            'oauth_nonce' => md5( microtime() . mt_rand() ),
            'oauth_timestamp' => time(),
            'oauth_signature_method' => $this->signatureMethod,
        );

        $headers['oauth_signature'] = $this->signRequest($method, $url, $data + $headers);
        $header = array();
        foreach ( $headers as $k => $v ) {
            $header[] = rawurlencode( $k ) . '="' . rawurlencode( $v ) . '"';
        }
        $header = 'Authorization: OAuth ' . join( ', ', $header );
        return $header;
    }

}
