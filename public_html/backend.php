<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require('../vendor/autoload.php');
require('../oauth.php');
require('../BorderLocator.php');

class CropTool {

    public function __construct()
    {
        $this->api_url ='https://commons.wikimedia.org/w/api.php';
        $this->log_file = '../data/log.txt';
        $this->count_file = '../data/count.txt';
        $this->config_file = '../config.json';

        $this->hostname = isset($_SERVER['HTTP_X_FORWARDED_SERVER'])
                ? $_SERVER['HTTP_X_FORWARDED_SERVER']
                : $_SERVER['SERVER_NAME'];

        session_name('croptool');
        session_set_cookie_params(
            0,
            dirname( $_SERVER['SCRIPT_NAME'] ),
            $this->hostname
        );

        session_start();

        $config = json_decode(file_get_contents($this->config_file));

        $this->botUser = $config->user;
        $this->botPass = $config->pass;
        $this->pathToJpegTran = $config->jpegtran;

        $this->curl = new Curl;
        $this->curl->cookie_file = '../data/cookiejar.txt';
        $this->curl->user_agent = 'CropTool (+tools.wmflabs.org/croptool)';
        $this->curl->follow_redirects = false;

        $this->oauth = new OAuthConsumer;
    }

    public function checkOauthLogin()
    {
        if ($this->oauth->isAuthorized()) {
            return array('user' => $this->oauth->getUsername());
        } else {
            return array('error' => $this->oauth->authError);
        }
    }

    public function checkTuscLogin()
    {
        if (isset($_SESSION['tusclogin'])) {
            return array('user' => $_SESSION['tusclogin']);
        } else {
            return false;
        }
    }

    public function checkLogin()
    {
        return array(
            'oauth' => $this->checkOauthLogin(),
            'tusc' => $this->checkTuscLogin()
        );
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

    public function logout()
    {
        $this->oauth->doLogout();
        return array(
            'oauth' => $this->checkOauthLogin(),
            'tusc' => $this->checkTuscLogin()
        );
    }

    public function apiRequest($args, $multipart = false)
    {
        $args['format'] = 'json';
        if ($this->oauth->isAuthorized()) {
            return $this->oauth->doApiQuery($args, $multipart);
        } else {
            return json_decode($this->curl->post($this->api_url, $args, $multipart));
        }
    }

    private function apiImageInfo($title)
    {
        if (!$this->isAuthorized()) {
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

        if (!$this->isAuthorized()) {
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
        $dest_name = 'files/' . $sha1 . '_cropped' . $ext;
        $dest_path = dirname(__FILE__) . '/' . $dest_name;

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
        */

        $res = array(
            'lossless' => false
        );

        if ($cm === 'lossless') {
            $cmd = $this->pathToJpegTran . ' -copy all -crop ' . escapeshellarg($dim) . ' ' . escapeshellarg($src_path) .' > ' . escapeshellarg($dest_path);
            $cmd_res = exec($cmd, $output, $return_var);
            $res['lossless'] = true;

        } else if ($cm === 'exact') {
            #$cmd = 'convert ' . escapeshellarg($src_path) . ' -crop ' . escapeshellarg($dim) . ' ' . escapeshellarg($dest_path);
            #$cmd_res = exec($cmd, $output, $return_var);

            $targ_w = $targ_h = 150;
            $jpeg_quality = 90;

            $img_r = imagecreatefromjpeg($src_path);
            $dst_r = imagecreatetruecolor($new_width, $new_height);

            list($width, $height) = getimagesize($src_path);

            imagecopyresampled($dst_r, $img_r, 0, 0, $new_x, $new_y, $new_width, $new_height, $new_width, $new_height);
            imagejpeg($dst_r, $dest_path, $jpeg_quality);

            #die("Output: $output, return var: $return_var");
            #
            $cmd_res = "";
            $return_var = 0;

        } else {
            die('unknown crop method');
        }

        $_SESSION['cropmethod'] = $cm;

        chmod($dest_path, 0664);

        if ($cmd_res != "" || $return_var != 0) {
            $res['error'] = $cmd_res;
            if (empty($cmd_res)) {
                switch ($return_var) {
                    case 127:
                        $res['error'] = 'jpegtran not found';
                        break;
                    default:
                        $res['error'] = 'Unknown error ' . $return_var;
                        break;

                }
            }
        } else {
            $s = getimagesize($dest_path);
            $res['name'] = $dest_name;
            $res['width'] = $s[0];
            $res['height'] = $s[1];
        }

        return $res;

    }

    public function isAuthorized()
    {
        if ($this->oauth->isAuthorized()) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsername()
    {
        if ($this->oauth->isAuthorized()) {
            return $this->oauth->getUsername();
        } else {
            return undefined;
        }
    }

    private function getEditToken($title)
    {

        if (!$this->isAuthorized()) {
            return array('error' => 'not_logged_in');
        }

        /*
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
        */

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

        if (!$this->isAuthorized()) {
            return array('error' => 'not_logged_in');
        }
        $user = $this->getUsername();

        $title = $input->title;
        $response = $this->apiImageInfo($title);
        if ($response === false) {
            die('File was not found');
        }
 
        $sha1 = $response->imageinfo[0]->sha1;
        $ext = $this->getFileExt($response->imageinfo[0]->mime);
        $orig_path = dirname(__FILE__) . '/files/' . $sha1 . $ext;
        $path = dirname(__FILE__) . '/files/' . $sha1 . '_cropped' . $ext;

        $s1 = getimagesize($orig_path);
        $s2 = getimagesize($path);
        $cropPercentX = round(($s1[0]-$s2[0]) / $s1[0] * 100);
        $cropPercentY = round(($s1[1]-$s2[1]) / $s1[1] * 100);

        $response = $this->apiRequest(array(
            'action' => 'parse',
            'prop' => 'wikitext',
            'format' => 'json',
            'page' => 'File:' . $title
        ));

        $wikitext = $response->parse->wikitext->{'*'};

        
        $token = $this->getEditToken($title);

        $args = array(
            'action' => 'upload',
            'format' => 'json',
            'token' => $token,
            //'file' => $imData,
            'file' => (version_compare(PHP_VERSION, '5.5.0') >= 0)
                ? new CURLFile($path)
                : '@' . $path
        );

        if ($input->overwrite == 'overwrite') {

            $args['filename'] = $title;
            $args['ignorewarnings'] = 1;
            $mode = ($_SESSION['cropmethod'] == 'lossless') ? 'lossless mode' : 'precise mode';
            $args['comment'] = 'Cropped ' . ($cropPercentX ?: ' < 1') . ' % horizontally and ' . ($cropPercentY ?: '< 1') . ' % vertically using [[Commons:CropTool|CropTool]] with ' . $mode . '.';
            
        } else {

            $args['filename'] = $input->filename;
            $args['comment'] = 'Cropped version of [[File:' . $title . ']] using [[Commons:CropTool|CropTool]].';

            $tpl = '{{Extracted from|' . $title . '}}';
            $x = mb_stripos($wikitext, "[[category:");
            if ($x !== false) {
                $wikitext = mb_substr($wikitext, 0, $x) . $tpl . "\n" . mb_substr($wikitext, $x);
            } else {
                $wikitext .= $tpl;
            }
            //$wikitext .= "\n[[Category:Test uploads]]";
            $args['text'] = $wikitext;

        }

        //$this->curl->headers['Content-Type'] = 'multipart/form-data';
        //$this->curl['Content-Disposition'] = $title;
        $response = $this->apiRequest($args, true);

        if ($response->upload->result == 'Success' && $input->overwrite == 'overwrite') {
            $wikitext2 = preg_replace('/{{crop}}\s*/i', '', $wikitext);
            $wikitext2 = preg_replace('/{{remove border}}\s*/i', '', $wikitext2);

            if ($wikitext != $wikitext2) {

                $token = $this->getEditToken($title);

                $response2 = $this->apiRequest(array(
                    'action' => 'edit',
                    'format' => 'json',
                    'summary' => 'Border removed using [[Commons:CropTool|CropTool]]',
                    'token' => $token,
                    'title' => 'File:' . $title,
                    'text' => $wikitext2
                ));

            }

        }

        $line = $args['filename'] . "\t" . $user . "\n";
        file_put_contents($this->log_file, $line, FILE_APPEND);

        $cnt = intval(file_get_contents($this->count_file));
        $cnt ++;
        file_put_contents($this->count_file, $cnt);

        // print_r($response);
        //     [body] => {"servedby":"mw1202","error":{"code":"fileexists-forbidden","info":"A file with name \"Hubert_Dolez.jpg\" already exists, and cannot be overwritten.","filekey":"11t6pa776pf8.43jfs5.3174940.jpg","sessionkey":"11t6pa776pf8.43jfs5.3174940.jpg","invalidparameter":"filename"}}

        return $response->upload;
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

        if (!$this->isAuthorized()) {
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

        $orig_name = 'files/' . $sha1 . $ext;
        $abs_path = dirname(__FILE__) . '/' . $orig_name;

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
            chmod($abs_path, 0664);
        }

        // 3. Get thumb

        if ($image_size[0] > 800) {

            $args = array(
              'f' => $title,
              'w' => 800
            );
            $thumb_url = 'https://commons.wikimedia.org/w/thumb.php?' . http_build_query($args);

            $thumb_name = 'files/' . $sha1 . '_thumb' . $ext;
            $abs_path = dirname(__FILE__) . '/' . $thumb_name;

            $r['thumb'] = array(
                'cached' => true,
                'name' => $thumb_name,
                'url' => $thumb_url
            );

            if (!file_exists($abs_path)) {
                $r['thumb']['cached'] = false;
                $data = $this->curl->get($thumb_url);
                file_put_contents($abs_path, $data);
                chmod($abs_path, 0664);

            }

            $s = getimagesize($abs_path);
            $r['thumb']['width'] = $s[0];
            $r['thumb']['height'] = $s[1];
        }

        return $r;
    }

    public function pageExists($title)
    {

        $response = $this->apiRequest(array(
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

    } else if (isset($_GET['action']) && ($_GET['action'] == 'logout')) {
        echo json_encode($ct->logout());

    } else {
        echo json_encode($ct->doCrop($input));

    }

    exit;
}

if (isset($_GET['checkLogin'])) {
    header('Content-type: application/json');
    echo json_encode($ct->checkLogin());
    exit;

} else if (isset($_GET['pageExists'])) {
    header('Content-type: application/json');
    echo json_encode(array(
        'exists' => $ct->pageExists($_GET['pageExists']),
        'filename' => $_GET['pageExists']
    ));
    exit;

} else if (isset($_GET['title'])) {
    $title = $_GET['title'];

    if (isset($_GET['lookup'])) {
        header('Content-type: application/json');
        echo json_encode($ct->fetchImage($title));
        exit;

    } else if (isset($_GET['locateBorder'])) {
        $info = $ct->fetchImage($title);
        $bl = new BorderLocator($info['original']['name']);
        $area = $bl->selection;

        header('Content-type: application/json');
        echo json_encode(array(
            'area' => $area
        ));
        exit;
    }
}
