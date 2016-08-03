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

    public function testAddExtractedFromTemplateBeforeLicenseHeader()
    {
        $oldText = '
{{Information
|description={{en|At right, two of the Solomonic columns brought to Rome by Constantine in their present day location on a pier in St. Peter\'s Basilica. In the foreground at left is part of Bernini\'s Baldacchino, inspired by the original columns.}}
}}
{{Location dec|41.902029|12.453861}}

=={{int:license-header}}==
{{self|cc-zero}}

[[Category:Versus populum altars]]
[[Category:Altar of Saint Peter\'s Basilica]]';

        $newText = '
{{Information
|description={{en|At right, two of the Solomonic columns brought to Rome by Constantine in their present day location on a pier in St. Peter\'s Basilica. In the foreground at left is part of Bernini\'s Baldacchino, inspired by the original columns.}}
}}
{{Location dec|41.902029|12.453861}}
{{Extracted from|My new file.jpg}}

=={{int:license-header}}==
{{self|cc-zero}}

[[Category:Versus populum altars]]
[[Category:Altar of Saint Peter\'s Basilica]]';

        $wikitext = new WikiText($oldText);
        $wikitext->appendExtractedFromTemplate('My new file.jpg');
        $this->assertEquals($newText, $wikitext);
    }

    public function testAddExtractedFromTemplateBeforeCategories()
    {
        $oldText = '
{{Information
|description={{en|At right, two of the Solomonic columns brought to Rome by Constantine in their present day location on a pier in St. Peter\'s Basilica. In the foreground at left is part of Bernini\'s Baldacchino, inspired by the original columns.}}
}}
{{Location dec|41.902029|12.453861}}

==License==
{{self|cc-zero}}

[[Category:Versus populum altars]]
[[Category:Altar of Saint Peter\'s Basilica]]';

        $newText = '
{{Information
|description={{en|At right, two of the Solomonic columns brought to Rome by Constantine in their present day location on a pier in St. Peter\'s Basilica. In the foreground at left is part of Bernini\'s Baldacchino, inspired by the original columns.}}
}}
{{Location dec|41.902029|12.453861}}

==License==
{{self|cc-zero}}
{{Extracted from|My old file.jpg}}

[[Category:Versus populum altars]]
[[Category:Altar of Saint Peter\'s Basilica]]';

        $wikitext = new WikiText($oldText);
        $wikitext->appendExtractedFromTemplate('My old file.jpg');
        $this->assertEquals($newText, $wikitext);
    }

    public function testAddDerivativeVersionsTemplateToOtherVersions()
    {
        $oldText = '
{{Location|34|36|52|N|135|44|20|E|type:landmark_region:JP-29_scale:2000}}
{{Information
|other_versions=

|Description={{en|Yumedono (Hall of Dreams) at [[Horyu-ji]] [[Buddhism|Buddhist]] [[temple]], [[Nara Prefecture]], [[Japan]]}}
|Author=[[User:Fg2|Fg2]] (Frank J. Gualtieri Jr.)
|Date={{date|2004}}?
|Source={{self-photographed}}
|Permission=public domain
}}

{{PD-self}}

[[Category:Yumedono, Horyu-ji]]';

        $newText = '
{{Location|34|36|52|N|135|44|20|E|type:landmark_region:JP-29_scale:2000}}
{{Information
|other_versions={{Derivative versions|display=150|My new file.jpg}}

|Description={{en|Yumedono (Hall of Dreams) at [[Horyu-ji]] [[Buddhism|Buddhist]] [[temple]], [[Nara Prefecture]], [[Japan]]}}
|Author=[[User:Fg2|Fg2]] (Frank J. Gualtieri Jr.)
|Date={{date|2004}}?
|Source={{self-photographed}}
|Permission=public domain
}}

{{PD-self}}

[[Category:Yumedono, Horyu-ji]]';

        $wikitext = new WikiText($oldText);
        $wikitext->appendDerivativeVersionsTemplate('My new file.jpg');
        $this->assertEquals($newText, $wikitext);
    }

    public function testAppendFileToExistingDerivativeVersionsTemplate()
    {
        $oldText = '
{{Location|34|36|52|N|135|44|20|E|type:landmark_region:JP-29_scale:2000}}
{{Information
|other_versions={{DerivativeVersions|HoryujiYumedono0363 edit1.jpg}}

|Description={{en|Yumedono (Hall of Dreams) at [[Horyu-ji]] [[Buddhism|Buddhist]] [[temple]], [[Nara Prefecture]], [[Japan]]}}
|Author=[[User:Fg2|Fg2]] (Frank J. Gualtieri Jr.)
|Date={{date|2004}}?
|Source={{self-photographed}}
|Permission=public domain
}}

{{PD-self}}

[[Category:Yumedono, Horyu-ji]]';

        $newText = '
{{Location|34|36|52|N|135|44|20|E|type:landmark_region:JP-29_scale:2000}}
{{Information
|other_versions={{DerivativeVersions|HoryujiYumedono0363 edit1.jpg|My new file.jpg}}

|Description={{en|Yumedono (Hall of Dreams) at [[Horyu-ji]] [[Buddhism|Buddhist]] [[temple]], [[Nara Prefecture]], [[Japan]]}}
|Author=[[User:Fg2|Fg2]] (Frank J. Gualtieri Jr.)
|Date={{date|2004}}?
|Source={{self-photographed}}
|Permission=public domain
}}

{{PD-self}}

[[Category:Yumedono, Horyu-ji]]';

        $wikitext = new WikiText($oldText);
        $wikitext->appendDerivativeVersionsTemplate('My new file.jpg');
        $this->assertEquals($newText, $wikitext);
    }

}
