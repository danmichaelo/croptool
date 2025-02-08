<?php

namespace CropTool\File;

interface FileInterface
{
    public function fetchPage($pageno);

    public function getAbsolutePathForPage($pageno, $suffix = '');

    public function getRelativePathForPage($pageno, $suffix = '');

    public function exists($pageno, $suffix = '');

    public function getShortSha1();

    static public function readMetadata($path);

    public function crop($srcPath, $destPath, $method, $coords, $rotation);

    static public function saveImage($im, $destPath, $srcPath);

    public function supportsRotation();

    public function overrideResultExtension();
}
