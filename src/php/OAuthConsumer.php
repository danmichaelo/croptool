<?php

namespace CropTool;

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Exception\WrongKeyOrModifiedCiphertextException;
use Defuse\Crypto\Key;
use Psr\Log\LoggerInterface;

// See also: http://oauth.googlecode.com/svn/code/php/OAuth.php

class OAuthConsumer implements AuthServiceInterface
{

    /**
     * The Special:OAuth URL.
     * Note that /wiki/Special:OAuth sometimes fails, while
     * index.php?title=Special:OAuth works fine.
     */
    protected $mwOAuthUrl = 'https://www.mediawiki.org/w/index.php?title=Special:OAuth';

    protected $callbackUrl; // = 'https://tools.wmflabs.org/croptool/api/auth/callback';

    /**
     * The interwiki prefix for the OAuth central wiki.
     */
    protected $mwOAuthIW = 'mw';

    private $gUserAgent;
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
     * The hostname, most likely 'tools.wmflabs.org'
     */
    protected $hostname;

    /**
     * The base path
     */
    protected $basepath;

    protected $logger;
    protected $session;
    protected $cookieKey;

    public $warnings = [];
    const INVALID_COOKIE = 'INVALID_COOKIE';

    public function __construct(Config $config, LoggerInterface $logger, SessionInterface $session, $keyFile, $callbackUrl)
    {
        $this->hostname = $config->get('hostname');
        $this->basepath = $config->get('basepath');
        $this->gUserAgent = $config->get('userAgent');
        $this->gConsumerKey = $config->get('consumerKey');
        $this->gConsumerSecret = $config->get('consumerSecret');
        $this->logger = $logger;
        $this->session = $session;
        $this->cookieKey = $this->loadEncryptionKeyFromConfig($keyFile);
        $this->callbackUrl = $callbackUrl;

        // Load the user token (request or access) from the session
        $this->gTokenKey = '';
        $this->gTokenSecret = '';

        // Grab temporary request token from SESSION
        if ($this->session->has('mwKey') && $this->session->has('mwSecret')) {
            $this->gTokenKey = $this->session->pull('mwKey');
            $this->gTokenSecret = $this->session->pull('mwSecret');

        // or grab permanent token from COOKIE
        } elseif (isset($_COOKIE['mwKey']) && isset($_COOKIE['mwSecret'])) {
            try {
                $this->gTokenKey = Crypto::decrypt($_COOKIE['mwKey'], $this->cookieKey);
                $this->gTokenSecret = Crypto::decrypt($_COOKIE['mwSecret'], $this->cookieKey);
            } catch (WrongKeyOrModifiedCiphertextException $ex) {
                $this->warnings[] = self::INVALID_COOKIE;
            }
        }
    }

    protected function loadEncryptionKeyFromConfig($keyFile)
    {
        $keyAscii = file_get_contents($keyFile);
        return Key::loadFromAsciiSafeString($keyAscii);
    }

    public function getUserAgent()
    {
        return $this->gUserAgent;
    }

    public function isAuthorized()
    {
        return $this->gTokenSecret != '';
    }

    public function hasTokenSecret()
    {
        return $this->gTokenSecret != '';
    }

    public function getMessages()
    {
        return $this->warnings;
    }

    /**
     * Handle a callback to fetch the permanent access token
     * @param string $oauth_verifier
     */
    public function handleCallbackRequest($oauth_verifier)
    {
        $requestToken = $this->gTokenKey;
        $requestTokenSha1 = substr(sha1($requestToken), 0, 7);

        if (empty($requestToken)) {
            throw new \RuntimeException('Cannot fetch access token when no token key set.');
        }

        $url = $this->mwOAuthUrl . '/token';
        $url .= strpos($url, '?') ? '&' : '?';
        $url .= http_build_query(array(
            'format' => 'json',

            // OAuth information
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $requestToken,
            'oauth_verifier' => $oauth_verifier,
            'oauth_version' => '1.0',
            'oauth_nonce' => md5(microtime() . mt_rand()),
            'oauth_timestamp' => time(),

            // We're using secret key signatures here.
            'oauth_signature_method' => $this->signatureMethod,
        ));

        $signature = $this->signRequest('GET', $url);

        $url .= "&oauth_signature=" . urlencode($signature);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->gUserAgent);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        if (!$data) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] ' . $requestTokenSha1 . ': Failed to fetch permanent token, got curl error: ' .  curl_error($ch));
            throw new \RuntimeException('Curl error: ' . htmlspecialchars(curl_error($ch)));
        }
        curl_close($ch);
        $token = json_decode($data);

        var_dump($url);
        var_dump($token);

        if (is_object($token) && isset($token->error)) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] ' . $requestTokenSha1 . ': Failed to fetch permanent token: ' . htmlspecialchars($token->error));
            throw new \RuntimeException('Error retrieving token: ' . htmlspecialchars($token->error));
        }
        if (!is_object($token) || !isset($token->key) || !isset($token->secret)) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] ' . $requestTokenSha1 . ': Failed to fetch permanent token, got invalid response.');
            throw new \RuntimeException('Invalid response from token request');
        }

        // Save the access token

        $twoYears = time() + 60 * 60 * 24 * 365 * 2;

        $this->gTokenKey = $token->key;
        if (!setcookie('mwKey',
            Crypto::encrypt($this->gTokenKey, $this->cookieKey),
            $twoYears,
            $this->basepath,
            $this->hostname,
            true,  // only secure (https)
            true   // httponly
        )) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] Failed to store permanent token');
            throw new \RuntimeException('Failed to store key');
        }

        $this->gTokenSecret = $token->secret; // 40 bytes
        if (!setcookie('mwSecret',
            Crypto::encrypt($this->gTokenSecret, $this->cookieKey), // ~ 150 bytes
            $twoYears,
            $this->basepath,
            $this->hostname,
            true,  // only secure (https)
            true   // httponly
        )) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] Failed to store permanent token');
            throw new \RuntimeException('Failed to store secret.');
        }

        $this->logger->info('[oauth] ' . $requestTokenSha1 . ': Authorization successful');
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
     * @throws \RuntimeException
     */
    protected function signRequest($method, $url, $params = array())
    {
        $parts = parse_url($url);

        // We need to normalize the endpoint URL
        $scheme = array_get($parts, 'scheme', 'http');
        $host = array_get($parts, 'host', '');
        $port = array_get($parts, 'port', $scheme == 'https' ? '443' : '80');
        $path = array_get($parts, 'path', '');
        if (($scheme == 'https' && $port != '443') || ($scheme == 'http' && $port != '80')) {
            // Only include the port if it's not the default
            $host = "$host:$port";
        }

        // Also the parameters
        $pairs = array();
        parse_str(array_get($parts, 'query', ''), $query);
        $query += $params;
        unset($query['oauth_signature']);
        if ($query) {
            $query = array_combine(
            // rawurlencode follows RFC 3986 since PHP 5.3
                array_map('rawurlencode', array_keys($query)),
                array_map('rawurlencode', array_values($query))
            );
            ksort($query, SORT_STRING);
            foreach ($query as $k => $v) {
                $pairs[] = "$k=$v";
            }
        }

        $toSign = rawurlencode(strtoupper($method)) . '&' .
            rawurlencode("$scheme://$host$path") . '&' .
            rawurlencode(join('&', $pairs));

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
                throw new \RuntimeException('Unable to open private key file.');
            }

            // Sign using the key
            if (openssl_sign($toSign, $signature, $privateKey) === false) {
                throw new \RuntimeException('Unable to sign using the private key file.');
            }

            // Release the key resource
            openssl_free_key($privateKey);

            return base64_encode($signature);
        } else {
            $key = rawurlencode($this->gConsumerSecret) . '&' . rawurlencode($this->gTokenSecret);
            return base64_encode(hash_hmac('sha1', $toSign, $key, true));
        }
    }

    public function doLogout()
    {
        $this->logger->info('[oauth] Destroy authorization (logout)');

        setcookie('mwKey', '', time() - 3600, $this->basepath, $this->hostname, true, true);
        setcookie('mwSecret', '', time() - 3600, $this->basepath, $this->hostname, true, true);

        // The domain is sometimes prepended by a dot (http://stackoverflow.com/q/2285010):
        // To make sure the cookies are deleted:
        setcookie('mwKey', '', time() - 3600, $this->basepath, '.' . $this->hostname, true, true);
        setcookie('mwSecret', '', time() - 3600, $this->basepath, '.' . $this->hostname, true, true);
        setcookie('mwKey', '', time() - 3600, $this->basepath, '', true, true);
        setcookie('mwSecret', '', time() - 3600, $this->basepath, '', true, true);

        $this->gTokenKey = '';
        $this->gTokenSecret = '';
    }

    /**
     * Request authorization
     * @param string $state
     * @return string
     */
    public function getAuthorizationUrl($state)
    {

        // First, we need to fetch a temporary request token.
        // The request is signed with an empty token secret and no token key.
        $this->gTokenSecret = '';
        $url = $this->mwOAuthUrl . '/initiate';
        $url .= strpos($url, '?') ? '&' : '?';
        $url .= http_build_query(array(
            'format' => 'json',

            // OAuth information
            'oauth_callback' => $this->callbackUrl . '?' . $state,
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_version' => '1.0',
            'oauth_nonce' => md5(microtime() . mt_rand()),
            'oauth_timestamp' => time(),

            // We're using secret key signatures here.
            'oauth_signature_method' => $this->signatureMethod,
        ));
        $signature = $this->signRequest('GET', $url);
        $url .= "&oauth_signature=" . urlencode($signature);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->gUserAgent);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        if (!$data) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] No data received: ' . curl_error($ch));
            echo 'Curl error: ' . htmlspecialchars(curl_error($ch));
            exit(0);
        }
        curl_close($ch);
        $token = json_decode($data);

        if (is_object($token) && isset($token->error)) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] Failed to initiate: ' . htmlspecialchars($token->error));
            echo 'Error retrieving token: ' . htmlspecialchars($token->message);
            exit(0);
        }
        if (!is_object($token) || !isset($token->key) || !isset($token->secret)) {
            header("HTTP/1.1 500 Internal Server Error");
            $this->logger->error('[oauth] Invalid response from initiate request');
            echo 'Invalid response from token request';
            exit(0);
        }

        // Now we have the request token, we need to save it for later.

        $this->session->put('mwKey', $token->key);
        $this->session->put('mwSecret', $token->secret);  // What do we need this for?

        // Then we send the user off to authorize
        $url = $this->mwOAuthUrl . '/authorize';

        $url .= strpos($url, '?') ? '&' : '?';
        $url .= http_build_query(array(
            'oauth_token' => $token->key,
            'oauth_consumer_key' => $this->gConsumerKey,
        ));

        $this->logger->info('[oauth] ' . substr(sha1($token->key), 0, 7) . ': Requesting authorization');
        return $url;
    }

    /**
     * Sign request and return OAuth header for use with an API request
     * @param string $method HTTP method
     * @param string $url API URL
     * @param array $data Post data
     * @return string
     */
    public function signRequestAndReturnHeader($method, $url, $data = array())
    {
        $headers = array(
            'oauth_consumer_key' => $this->gConsumerKey,
            'oauth_token' => $this->gTokenKey,
            'oauth_version' => '1.0',
            'oauth_nonce' => md5(microtime() . mt_rand()),
            'oauth_timestamp' => time(),
            'oauth_signature_method' => $this->signatureMethod,
        );

        $headers['oauth_signature'] = $this->signRequest($method, $url, $data + $headers);
        $header = array();
        foreach ($headers as $k => $v) {
            $header[] = rawurlencode($k) . '="' . rawurlencode($v) . '"';
        }
        $header = 'Authorization: OAuth ' . join(', ', $header);
        return $header;
    }
}
