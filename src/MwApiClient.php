<?php

/**
* Simple MediaWiki API client
*/
class MwApiClient
{
    public $api_url = 'https://commons.wikimedia.org/w/api.php';
    public $cookie_file = '../data/cookiejar.txt';
    public $user_agent;

    function __construct(OAuthConsumer $oauth = null, Curl $curl = null)
    {
        $this->oauth = $oauth ?: new OAuthConsumer;
        $this->user_agent = $this->oauth->getUserAgent();

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
        return $this->oauth->authorized();
    }

    /**
     * Returns the username of the authorized user or NULL if none
     */
    public function getUser()
    {
        if ($this->authorized()) {
            return $this->oauth->getUsername();
        }
    }

    public function logout()
    {
        $this->oauth->doLogout();
    }

    /**
     * Make a request to the MW API
     * Returns an array
     */
    public function request($args, $multipart = false)
    {
        $args['format'] = 'json';
        if ($this->authorized()) {
            return $this->oauth->doApiQuery($args, $multipart);
        } else {
            return json_decode($this->curl->post($this->api_url, $args, $multipart));
        }
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

        $response = $this->request(array(
            'action' => 'query',
            'prop' => 'pageprops',
            'format' => 'json',
            'titles' => 'File:' . $title
        ));

        foreach ($response->query->pages as $pageid => $page) {
            if ($pageid == '-1') {
                return false;
            }
            return true;
        }

    }

}