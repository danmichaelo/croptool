<?php

class CropTool {

    protected $log_file = '../data/log.txt';

    protected $count_file = '../data/count.txt';

    protected $publicPath;

    public function __construct(MwApiClient $apiClient = null, Curl $curl = null)
    {
        $this->publicPath = dirname(dirname(__FILE__)) . '/public_html/';

        $this->api = $apiClient ?: new MwApiClient;
        $this->curl = $curl ?: new Curl;
        $this->curl->cookie_file = $this->api->cookie_file;
        $this->curl->user_agent = $this->api->user_agent;
        $this->curl->follow_redirects = false;
    }

    public function checkLogin() {
        $user = $this->api->getUser();
        if (is_null($user)) {
            return array('error' => 'not_logged_in');
        } else {
            return array('user' => $user);
        }
    }

    public function pageExists($title)
    {
        return $this->api->pageExists($title);
    }

    public function logout()
    {
        $this->api->logout();
        return $this->checkLogin();
    }

    public function doCrop($input) {

        if (!$this->api->authorized()) {
            return array('error' => 'not_logged_in');
        }

        $title = $input->title;
        $response = $this->api->getImageInfo($title);
        if ($response === false) {
            die('File was not found');
        }

        $sha1 = $response->imageinfo[0]->sha1;
        $ext = $this->getFileExt($response->imageinfo[0]->mime);
        $srcPath = $this->publicPath . '/files/' . $sha1 . $ext;
        $destPath = $this->publicPath . '/files/' . $sha1 . '_cropped' . $ext;

        $new_width = intval($input->w);
        $new_height = intval($input->h);
        $new_x = intval($input->x);
        $new_y = intval($input->y);

        $cm = $input->cropmethod;

        $image = new Image;
        $image->load($srcPath);
        if ($cm == 'precise') {
            $res = $image->preciseCrop($destPath, $new_x, $new_y, $new_width, $new_height);
        } else if ($cm == 'lossless') {
            $res = $image->losslessCrop($destPath, $new_x, $new_y, $new_width, $new_height);
        } else {
            die('Unknown crop method');
        }
        chmod($destPath, 0664);
        if (!isset($res['error'])) {
            // TODO: MAKE THUMB
        }

        $_SESSION['cropmethod'] = $cm;
        return $res;
    }

    public function removeBorderTemplateAndCat($text)
    {
        $text = preg_replace('/{{crop}}\s*/i', '', $text);
        $text = preg_replace('/{{remove border}}\s*/i', '', $text);
        $text = preg_replace('/\[\[category:images(?: |_)with(?: |_)borders\]\]\s*/i', '', $text);
        return $text;
    }

    public function upload($input) {

        if (!$this->api->authorized()) {
            return array('error' => 'not_logged_in');
        }
        $user = $this->api->getUser();

        $title = $input->title;
        $response = $this->api->getImageInfo($title);
        if ($response === false) {
            die('File was not found');
        }

        $sha1 = $response->imageinfo[0]->sha1;
        $ext = $this->getFileExt($response->imageinfo[0]->mime);
        $orig_path = $this->publicPath . '/files/' . $sha1 . $ext;
        $path = $this->publicPath . '/files/' . $sha1 . '_cropped' . $ext;

        $s1 = getimagesize($orig_path);
        $s2 = getimagesize($path);
        $cropPercentX = round(($s1[0]-$s2[0]) / $s1[0] * 100);
        $cropPercentY = round(($s1[1]-$s2[1]) / $s1[1] * 100);

        $response = $this->api->request(array(
            'action' => 'parse',
            'prop' => 'wikitext',
            'format' => 'json',
            'page' => 'File:' . $title
        ));

        $wikitext = $response->parse->wikitext->{'*'};

        $token = $this->api->getEditToken($title);

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
        $response = $this->api->request($args, true);

        if (!isset($response->upload)) {
            return $response;
        }

        if ($response->upload->result == 'Success' && $input->overwrite == 'overwrite') {

            $wikitext2 = $this->removeBorderTemplateAndCat($wikitext);

            if ($wikitext != $wikitext2) {

                $token = $this->api->getEditToken($title);

                $response2 = $this->api->request(array(
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

        if (!$this->api->authorized()) {
            return array('error' => 'not_logged_in');
        }

        // 1. API request

        $response = $this->api->getImageInfo($title);
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
        $abs_path = $this->publicPath . '/' . $orig_name;

        $res = array(
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
            $res['original']['cached'] = false;
            $data = $this->curl->get($image_url);
            file_put_contents($abs_path, $data);
            chmod($abs_path, 0664);
        }

        // 3. Make thumb

        $thumbName = 'files/' . $sha1 . '_thumb' . $ext;
        $thumbPath = $this->publicPath . '/' . $thumbName;

        $image = new Image();
        if (!$image->load($abs_path)) {
            $res['error'] = $image->error;
            return $res;
        }
        $thumbDim = $image->thumb($thumbPath, 800, 800);
        chmod($thumbPath, 0664);

        $res['orientation'] = $image->orientation;

        $res['thumb'] = array(
            'cached' => true,
            'name' => $thumbName,
            'width' => $thumbDim[0],
            'height' => $thumbDim[1]
        );

        return $res;
    }

}