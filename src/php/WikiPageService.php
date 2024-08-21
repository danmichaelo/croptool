<?php

namespace CropTool;

use CropTool\File\FileInterface;
use CropTool\File\FileRepository;
use DI\FactoryInterface;
use Psr\Log\LoggerInterface;

/**
 * @property bool exists
 * @property string site
 * @property string title
 * @property QueryResponse imageinfo
 * @property WikiText wikitext
 * @property FileInterface file
 */
class WikiPageService
{
    use MagicParameterTrait;

    protected $cache = [];
    protected $api;
    protected $files;
    protected $logger;
    protected $_title;
    protected $factory;
    protected $dirty;
    protected $namespace;

    /**
     * WikiPage constructor.
     * @param ApiService $api
     * @param FileRepository $files
     * @param LoggerInterface $logger
     * @param string $title
     * @param string $namespace
     */
    public function __construct(ApiService $api, FactoryInterface $factory, FileRepository $files, LoggerInterface $logger, $namespace = 'File:')
    {
        $this->api = $api;
        $this->files = $files;
        $this->logger = $logger;
        $this->factory = $factory;
        $this->namespace = $namespace;
        $this->dirty = false;
    }

    public function getForTitle($title, $site) : WikiPage {
        return $this->factory->make(WikiPage::class, [
            'title' => $title,
            'site' => $site
        ]);
    }
}
