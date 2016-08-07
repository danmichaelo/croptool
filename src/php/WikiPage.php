<?php

namespace CropTool;

use Psr\Log\LoggerInterface;

/**
 * @property bool exists
 * @property string site
 * @property string title
 * @property ImageInfoResponse imageinfo
 * @property WikiText wikitext
 * @property FileInterface file
 */
class WikiPage
{
    use MagicParameterTrait;

    protected $cache = [];
    protected $api;
    protected $files;
    protected $logger;
    protected $_title;
    protected $dirty;

    /**
     * WikiPage constructor.
     * @param ApiService $api
     * @param FileRepository $files
     * @param LoggerInterface $logger
     * @param string $title
     * @param string $namespace
     */
    public function __construct(ApiService $api, FileRepository $files, LoggerInterface $logger, $title, $namespace = 'File:')
    {
        $this->api = $api;
        $this->files = $files;
        $this->logger = $logger;
        $this->_title = $title;
        $this->namespace = $namespace;
        $this->dirty = false;
    }

    public function save($summary)
    {
        if (!$this->dirty) {
            return;
        }

        $this->api->savePage($this->namespace . $this->title, strval($this->wikitext), $summary);
        $this->logger->info('Saved page "' . $this->title . '": ' . $summary);
        $this->dirty = false;
    }

    public function upload($filename, $editComment, $ignoreWarnings = false)
    {
        $response = $this->api->upload(
            $this->title,
            $filename,
            $editComment,
            strval($this->wikitext),
            $ignoreWarnings
        );
        $this->dirty = false;
        return $response;
    }

    public function assertExists()
    {
        if (!$this->exists) {
            throw new \RuntimeException('File doesn\'t exist: ' . $this->title);
        }

        return $this;
    }

    public function assertNotExists()
    {
        if ($this->exists) {
            throw new \RuntimeException('File already exists: ' . $this->title);
        }

        return $this;
    }

    public function getTitleParameter()
    {
        return $this->_title;
    }

    public function getImageinfoParameter()
    {
        if (!isset($this->cache['imageinfo'])) {
            $this->cache['imageinfo'] = $this->api->getImageinfo($this->title);
        }
        return $this->cache['imageinfo'];
    }

    public function setWikitext(WikiText $text)
    {
        if (array_get($this->cache, 'wikitext') != $text) {
            $this->dirty = true;
        }
        $this->cache['wikitext'] = $text;

        return $this;
    }

    public function getWikitextParameter()
    {
        if (!isset($this->cache['wikitext'])) {
            $this->cache['wikitext'] = $this->api->getWikitext($this->title);
        }
        return $this->cache['wikitext'];
    }

    public function getFileParameter()
    {
        if (!isset($this->cache['file'])) {
            $this->cache['file'] = $this->files->get($this->imageinfo);
        }
        return $this->cache['file'];
    }

    public function getExistsParameter()
    {
        return $this->imageinfo->exists;
    }

    public function getSiteParameter()
    {
        return $this->api->getSite();
    }

    public function __clone()
    {
        $this->cache['wikitext'] = clone $this->cache['wikitext'];
    }
}
