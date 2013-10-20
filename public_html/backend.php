<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');
session_start();

require('../vendor/autoload.php');

class CropTool {

    public function __construct()
    {
        $this->api_url ='https://commons.wikimedia.org/w/api.php';
        $this->log_file = '../data/log.txt';
        $this->count_file = '../data/count.txt';
        $this->config_file = '../config.yml';

        $config = yaml_parse(file_get_contents($this->config_file));

        $this->botUser = $config['user'];
        $this->botPass = $config['pass'];
        $this->pathToJpegTran = $config['jpegtran'];

        $this->curl = new Curl;
        $this->curl->cookie_file = '../data/cookiejar.txt';
        $this->curl->user_agent = 'CropTool (+tools.wmflabs.org/croptool)';
        $this->curl->follow_redirects = false;
    }

    public function checkTuscLogin()
    {
        if (isset($_SESSION['tusclogin'])) {
            return array('user' => $_SESSION['tusclogin']);
        } else {
            return false;
        }
    }

    public function tuscLogin($user, $pass)
    {
        //die("$user : $pass");
        $r = $this->curl->post('https://toolserver.org/~magnus/tusc.php', array(
            'check' => 1,
            'botmode' => 1,
            'user' => $user,
            'language' => 'commons',
            'project' => 'wikimedia',
            'password' => $pass
        ));

        if ($r->body === '1') {
            $_SESSION['tusclogin'] = $user;
            return array('success' => true, 'user' => $user);
        }
        return array('success' => false);
    }

    public function tuscLogout()
    {
         unset($_SESSION['tusclogin']);
        return array();
    }

    public function apiRequest($args)
    {
        $args['format'] = 'json';
        return json_decode($this->curl->post($this->api_url, $args));
    }

    private function apiImageInfo($title)
    {
        if (!$this->checkTuscLogin()) {
            return array('error' => 'not_logged_in');
        }

        $response = $this->apiRequest(array(
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

    public function doCrop($input) {

        if (!$this->checkTuscLogin()) {
            return array('error' => 'not_logged_in');
        }

        $title = $input->title;
        $response = $this->apiImageInfo($title);
        if ($response === false) {
            die('File was not found');
        }

        $sha1 = $response->imageinfo[0]->sha1;
        $ext = $this->getFileExt($response->imageinfo[0]->mime);
        $src_path = dirname(__FILE__) . '/files/' . $sha1 . $ext;
        $dest_name = '/files/' . $sha1 . '_cropped' . $ext;
        $dest_path = dirname(__FILE__) . $dest_name;

        $new_width = intval($input->w);
        $new_height = intval($input->h);
        $new_x = intval($input->x);
        $new_y = intval($input->y);

        $cm = $input->cropmethod;

        $dim = $new_width . 'x' . $new_height . '+' . $new_x .'+' . $new_y;

        if (file_exists($dest_path)) {
            unlink($dest_path);
        }

        /*
        $targ_w = $targ_h = 150;
        $jpeg_quality = 90;

        $img_r = imagecreatefromjpeg($src_path);
        $dst_r = imagecreatetruecolor($new_width, $new_height);

        list($width, $height) = getimagesize($src_path);

        imagecopyresampled($dst_r, $img_r, 0, 0, $new_x, $new_y, $new_width, $new_height, $new_width, $new_height);
        imagejpeg($dst_r, null, $jpeg_quality);
        */

        $res = array(
            'lossless' => false
        );

        if ($cm === 'lossless') {
            $cmd = $this->pathToJpegTran . ' -copy all -crop ' . escapeshellarg($dim) . ' ' . escapeshellarg($src_path) .' > ' . escapeshellarg($dest_path);
            $cmd_res = exec($cmd, $output, $return_var);
            $res['lossless'] = true;

        } else if ($cm === 'exact') {
            $cmd = 'convert ' . escapeshellarg($src_path) . ' -crop ' . escapeshellarg($dim) . ' ' . escapeshellarg($dest_path);
            $cmd_res = exec($cmd, $output, $return_var);

        } else {
            die('unknown crop method');
        }

        if ($cmd_res != "") {
            $res['error'] = $cmd_res;
            $res['return_var'] = $return_var;
        } else {
            $s = getimagesize($dest_path);
            $res['name'] = $dest_name;
            $res['width'] = $s[0];
            $res['height'] = $s[1];
        }

        return $res;

    }

    private function getUploadToken($title)
    {

        if (!$this->checkTuscLogin()) {
            return array('error' => 'not_logged_in');
        }

        // STEP 1:

        $response = $this->apiRequest(array(
          'action' => 'login',
          'lgname' => $this->botUser,
          'lgpassword' => $this->botPass
        ));

        $token = $response->login->token;

        // STEP 2:

        $response = $this->apiRequest(array(
          'action' => 'login',
          'lgname' => $this->botUser,
          'lgpassword' => $this->botPass,
          'lgtoken' => $token
        ));

        // STEP 3:

        $response = $this->apiRequest(array(
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

    public function upload($input) {

        $auth = $this->checkTuscLogin();
        if (!$auth) {
            return array('error' => 'not_logged_in');
        }
        $user = $auth['user'];

        $title = $input->title;
        $response = $this->apiImageInfo($title);
        if ($response === false) {
            die('File was not found');
        }

        $sha1 = $response->imageinfo[0]->sha1;
        $ext = $this->getFileExt($response->imageinfo[0]->mime);
        $path = dirname(__FILE__) . '/files/' . $sha1 . '_cropped' . $ext;

        $token = $this->getUploadToken($title);

        $args = array(
            'action' => 'upload',
            'format' => 'json',
            'token' => $token,

            // < PHP 5.5: 'file' => '@' . $path
            // PHP 5.5:
            'file' => new CURLFile($path)
        );

        if ($input->overwrite == 'overwrite') {
            $args['filename'] = 'File:' . $title;
            $args['ignorewarnings'] = 1;
            $args['comment'] = 'Cropped by [[User:' . $user . ']] using CropTool.';

        } else {
            $args['filename'] = 'File:' . $input->filename;
            $args['comment'] = 'Cropped version of [[File:' . $title . ']]. Cropped by [[User:' . $user . ']] using CropTool.';

            $response = $this->apiRequest(array(
                'action' => 'parse',
                'prop' => 'wikitext',
                'format' => 'json',
                'page' => 'File:' . $title
            ));

            $tpl = '{{Extracted from|' . $title . '|operator=' . $user . '}}';

            $wikitext = $response->parse->wikitext->{'*'};
            if ($x = mb_stripos($wikitext, "[[Category:") !== false) {
                $wikitext = mb_substr($wikitext, 0, $x) . $tpl . "\n" . mb_substr($wikitext, $x);
            } else {
                $wikitext .= $tpl;
            }
            $args['text'] = $wikitext;
        }

        $this->curl->headers['Content-Type'] = 'multipart/form-data';
        //$this->curl['Content-Disposition'] = $title;
        $response = $this->curl->post($this->api_url, $args, 'multipart/form-data');

        $line = $args['filename'] . "\t" . $user . "\n";
        file_put_contents($this->log_file, $line, FILE_APPEND);

        $cnt = intval(file_get_contents($this->count_file));
        $cnt ++;
        file_put_contents($this->count_file, $cnt);

        return json_decode($response)->upload;
    }


    public function getFileExt($image_mime)
    {
        switch ($image_mime) {
            case 'image/jpeg':
                return '.jpg';
        }
        return false;
    }

    public function fetchImage($title)
    {

        if (!$this->checkTuscLogin()) {
            return array('error' => 'not_logged_in');
        }

        // 1. API request

        $response = $this->apiImageInfo($title);
        if ($response === false) {
            return array('error' => 'File was not found');
        }

        $image_url = $response->imageinfo[0]->url;
        $image_size = array($response->imageinfo[0]->width, $response->imageinfo[0]->height);
        $desc_url = $response->imageinfo[0]->descriptionurl;
        $sha1 = $response->imageinfo[0]->sha1;
        $image_mime = $response->imageinfo[0]->mime;

        $ext = $this->getFileExt($image_mime);
        if ($ext === false) {
            return array('error' => 'File had unknown mime type ' . $image_mime);
        }

        // 2. Get original file

        $orig_name = '/files/' . $sha1 . $ext;
        $abs_path = dirname(__FILE__) . $orig_name;

        $r = array(
            'original' => array(
                'cached' => true,
                'name' => $orig_name,
                'width' => $image_size[0],
                'height' => $image_size[1],
            ),
            'mime' => $image_mime,
            'description' => $desc_url
        );

        if (!file_exists($abs_path)) {
            $r['original']['cached'] = false;
            $data = $this->curl->get($image_url);
            file_put_contents($abs_path, $data);
        }

        // 3. Get thumb

        if ($image_size[0] > 800) {

            $args = array(
              'f' => $title,
              'w' => 800
            );
            $thumb_url = 'https://commons.wikimedia.org/w/thumb.php?' . http_build_query($args);

            $thumb_name = '/files/' . $sha1 . '_thumb' . $ext;
            $abs_path = dirname(__FILE__) . $thumb_name;

            $r['thumb'] = array(
                'cached' => true,
                'name' => $thumb_name,
                'url' => $thumb_url
            );

            if (!file_exists($abs_path)) {
                $r['thumb']['cached'] = false;
                $data = $this->curl->get($thumb_url);
                file_put_contents($abs_path, $data);
            }

            $s = getimagesize($abs_path);
            $r['thumb']['width'] = $s[0];
            $r['thumb']['height'] = $s[1];
        }

        return $r;
    }

}


/*************************************************
 * Routing
 *************************************************/

$ct = new CropTool();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = json_decode(file_get_contents("php://input"));

    header('Content-type: application/json');

    if (isset($input->store)) {
        echo json_encode($ct->upload($input));

    } else if (isset($_POST['username']) && isset($_POST['password'])) {
        echo json_encode($ct->tuscLogin($_POST['username'], $_POST['password']));

    } else if (isset($_POST['logout'])) {
        echo json_encode($ct->tuscLogout());

    } else {
        echo json_encode($ct->doCrop($input));

    }

    exit;
}

if (isset($_GET['checkLogin'])) {
    header('Content-type: application/json');
    echo json_encode($ct->checkTuscLogin());
    exit;
}


if (!isset($_GET['title'])) {
  print "Please provide a title";
  die;
}
$title = $_GET['title'];


if (isset($_GET['lookup'])) {
    echo json_encode($ct->fetchImage($title));
    exit;
}
