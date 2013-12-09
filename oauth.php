<?php

// See also: http://oauth.googlecode.com/svn/code/php/OAuth.php

class OAuthConsumer {

    /**
     * Set this to point to a file (outside the webserver root!) containing the
     * following keys:
     * - agent: The HTTP User-Agent to use
     * - consumerKey: The "consumer token" given to you when registering your app
     * - consumerSecret: The "secret token" given to you when registering your app
     */
    protected $inifile = '../oauth.ini';

    /**
     * Set this to the Special:OAuth URL.
     * Note that /wiki/Special:OAuth sometimes fails, while
     * index.php?title=Special:OAuth works fine.
     */
    protected $mwOAuthUrl = 'https://www.mediawiki.org/w/index.php?title=Special:OAuth';

    protected $rsaPrivateKeyFile = '../mykey.pem';

    protected $rsaPublicKeyFile = '../mykey.public';

    /**
     * Set this to the interwiki prefix for the OAuth central wiki.
     */
    protected $mwOAuthIW = 'mw';

    /**
     * Set this to the API endpoint
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

    private $username = ''; // username of the authorized user

    public function __construct()
    {

        $twoYears = 60 * 60 * 24 * 365 * 2;
        session_name('croptool');
        session_set_cookie_params(
            $twoYears,
            dirname( $_SERVER['SCRIPT_NAME'] ),
            'tools.wmflabs.org',
            true,  // only secure (https)
            true   // httponly
        );

        session_start();

        if (isset($_GET['title'])) {
            $_SESSION['title'] = $_GET['title'];
        }

        // Setup the session cookie
        //session_name( 'OAuthHelloWorld' );

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

        // Load the user token (request or access) from the session
        $this->gTokenKey = '';
        $this->gTokenSecret = '';
        //session_start();
        if ( isset( $_SESSION['tokenKey'] ) ) {
            $this->gTokenKey = $_SESSION['tokenKey'];
            $this->gTokenSecret = $_SESSION['tokenSecret'];
        }
        //session_write_close();

        // Fetch the access token if this is the callback from requesting authorization
        if ( isset( $_GET['oauth_verifier'] ) && $_GET['oauth_verifier'] ) {
            $this->fetchAccessToken();
            header('Location: ./?title=' . $_SESSION['title']);
            exit;
        }

        // Take any requested action
        switch ( isset( $_GET['action'] ) ? $_GET['action'] : '' ) {

            case 'authorize':
                $this->doAuthorizationRedirect();
                return;

            /*case 'edit':
                $this->doEdit();
                break;
                */
        }

        $this->authorized = $this->checkAuthorization();

        session_write_close();
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
            //echo 'Bad API response: <pre>' . htmlspecialchars( var_export( $res, 1 ) ) . '</pre>';
            return false;
        }
        if ( isset( $res->query->userinfo->anon ) ) {
            $this->authError = 'Not logged in';
            //echo 'Not logged in. (How did that happen?)';
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

        $requestToken = $_GET['oauth_token'];

        $url = $this->mwOAuthUrl . '/token';
        $url .= strpos( $url, '?' ) ? '&' : '?';
        $url .= http_build_query( array(
            'format' => 'json',
            'oauth_verifier' => $_GET['oauth_verifier'],

            // OAuth information
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $this->gTokenKey, // request token
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
        //session_start();
        $_SESSION['tokenKey'] = $this->gTokenKey = $token->key;
        $_SESSION['tokenSecret'] = $this->gTokenSecret = $token->secret;
        //session_write_close();
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
        session_start();
        session_destroy();
        $_SESSION = array();
        $this->authorized = false;
        $this->username = '';
        session_write_close();
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
        $_SESSION['tokenKey'] = $token->key;
        $_SESSION['tokenSecret'] = $token->secret;
        session_write_close();

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

    /**
     * Perform a generic edit
     * @return void Does not return
     */
    function doEdit() {

        $ch = null;

        // First fetch the username
        $res = $this->doApiQuery( array(
            'format' => 'json',
            'action' => 'query',
            'meta' => 'userinfo',
        ) );

        if ( isset( $res->error->code ) && $res->error->code === 'mwoauth-invalid-authorization' ) {
            // We're not authorized!
            echo 'You haven\'t authorized this application yet! Go <a href="' . htmlspecialchars( $_SERVER['SCRIPT_NAME'] ) . '?action=authorize">here</a> to do that.';
            echo '<hr>';
            return;
        }

        if ( !isset( $res->query->userinfo ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Bad API response: <pre>' . htmlspecialchars( var_export( $res, 1 ) ) . '</pre>';
            exit(0);
        }
        if ( isset( $res->query->userinfo->anon ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Not logged in. (How did that happen?)';
            exit(0);
        }
        $page = 'User talk:' . $res->query->userinfo->name;

        // Next fetch the edit token
        $res = $this->doApiQuery( array(
            'format' => 'json',
            'action' => 'tokens',
            'type' => 'edit',
        ) );
        if ( !isset( $res->tokens->edittoken ) ) {
            header( "HTTP/1.1 500 Internal Server Error" );
            echo 'Bad API response: <pre>' . htmlspecialchars( var_export( $res, 1 ) ) . '</pre>';
            exit(0);
        }
        $token = $res->tokens->edittoken;

        // Now perform the edit
        $res = $this->doApiQuery( array(
            'format' => 'json',
            'action' => 'edit',
            'title' => $page,
            'section' => 'new',
            'sectiontitle' => 'Hello, world',
            'text' => 'This message was posted using the OAuth Hello World application, and should be seen as coming from yourself. To revoke this application\'s access to your account, visit [[:' . $this->mwOAuthIW . ':Special:OAuthManageMyGrants]]. ~~~~',
            'summary' => '/* Hello, world */ Hello from OAuth!',
            'watchlist' => 'nochange',
            'token' => $token,
        ) );

        echo 'API edit result: <pre>' . htmlspecialchars( var_export( $res, 1 ) ) . '</pre>';
        echo '<hr>';
    }
}
