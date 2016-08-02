<?php

class WikiTextTest extends PHPUnit_Framework_TestCase
{
    public function testRemovesTheImagesWithBordersCategory()
    {
        $wikitext = new WikiText('abc [[Category:SomeCategory]] [[Category:Images with borders]][[Category:SomeOtherCategory]] def');

        $stuff = new StdClass;
        $stuff->border = true;
        $wikitext->removeStuff($stuff);

        $this->assertEquals('abc [[Category:SomeCategory]] [[Category:SomeOtherCategory]] def', $wikitext);
    }

    public function testRemovesTheLowercasedImagesWithBordersCategory()
    {
        $wikitext = new WikiText('abc [[Category:SomeCategory]] [[category:images with borders]][[Category:SomeOtherCategory]] def');

        $stuff = new StdClass;
        $stuff->border = true;
        $wikitext->removeStuff($stuff);

        $this->assertEquals('abc [[Category:SomeCategory]] [[Category:SomeOtherCategory]] def', $wikitext);
    }

    public function testRemovesTheUnderscoredImagesWithBordersCategory()
    {
        $wikitext = new WikiText('abc [[Category:SomeCategory]] [[Category:Images_with_borders]][[Category:SomeOtherCategory]] def');

        $stuff = new StdClass;
        $stuff->border = true;
        $wikitext->removeStuff($stuff);

        $this->assertEquals('abc [[Category:SomeCategory]] [[Category:SomeOtherCategory]] def', $wikitext);
    }

    public function testRemovesTheCropTemplate()
    {
        $wikitext = new WikiText('abc {{Crop}} def');

        $stuff = new StdClass;
        $stuff->border = true;
        $wikitext->removeStuff($stuff);

        $this->assertEquals('abc def', $wikitext);
    }

    public function testRemovesTheRemoveBorderTemplate()
    {
        $wikitext = new WikiText('abc {{Remove border}} def');

        $stuff = new StdClass;
        $stuff->border = true;
        $wikitext->removeStuff($stuff);

        $this->assertEquals('abc def', $wikitext);
    }

}
