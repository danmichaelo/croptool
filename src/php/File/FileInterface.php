<?php

namespace CropTool\File;

interface FileInterface
{

    public function fetchPage($pageno);

    public function getAbsolutePathForPage($pageno, $suffix = '');

    public function getRelativePathForPage($pageno, $suffix = '');

    public function exists($pageno, $suffix = '');

    public function getShortSha1();

    // TODO
}
