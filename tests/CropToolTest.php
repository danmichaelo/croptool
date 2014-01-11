<?php

class CropToolTest extends PHPUnit_Framework_TestCase
{
    public function testRemoveBorderTemplateAndCat()
    {
        $ct = new CropTool;

        $txt = $ct->removeBorderTemplateAndCat('abc [[Category:Images with borders]] def');
        $this->assertEquals('abc def', $txt);

        $txt = $ct->removeBorderTemplateAndCat('abc [[Category:Images_with_borders]] def');
        $this->assertEquals('abc def', $txt);

        $txt = $ct->removeBorderTemplateAndCat('abc {{Crop}} def');
        $this->assertEquals('abc def', $txt);

        $txt = $ct->removeBorderTemplateAndCat('abc {{Remove border}} def');
        $this->assertEquals('abc def', $txt);
    }
}
