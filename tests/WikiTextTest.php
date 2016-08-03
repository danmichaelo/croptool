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
=={{int:filedesc}}==
{{Information
|description={{ru|1=Домовый Троицкий храм}}
|date=1905
|source=http://forum.vgd.ru/1410/46846/20.htm?a=stdforum_view&o=
|author=Шерер и Набгольц
|permission=
|other versions=
}}

=={{int:license-header}}==
{{PD-old-70-1923}}


[[Category:Uploaded with UploadWizard]]
[[Category:Churches in Moscow]]
';

        $newText = '
=={{int:filedesc}}==
{{Information
|description={{ru|1=Домовый Троицкий храм}}
|date=1905
|source=http://forum.vgd.ru/1410/46846/20.htm?a=stdforum_view&o=
|author=Шерер и Набгольц
|permission=
|other versions=
}}
{{Extracted from|My new file.jpg}}

=={{int:license-header}}==
{{PD-old-70-1923}}


[[Category:Uploaded with UploadWizard]]
[[Category:Churches in Moscow]]
';

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

    /**
     * This test also test that multibyte wikitext is handled correctly
     */
    public function testAddDerivativeVersionsTemplateToOtherVersions()
    {
        $oldText = '
=={{int:filedesc}}==
{{Information
|description={{zh|1=北师大启功像1。}}
|date=2016-05-24 12:54:22
|source={{own}}
|author=[[User:三猎|三猎]]
|permission=
|other versions=
}}

=={{int:license-header}}==
{{self|cc-by-sa-4.0}}

[[Category:Beijing Normal University]]
[[Category:Qi Gong artist]]
[[Category:Busts in Beijing]]
[[Category:Bronze busts]]
[[Category:Uploaded with UploadWizard]]';

        $newText = '
=={{int:filedesc}}==
{{Information
|description={{zh|1=北师大启功像1。}}
|date=2016-05-24 12:54:22
|source={{own}}
|author=[[User:三猎|三猎]]
|permission=
|other versions={{Derivative versions|display=150|My new file.jpg}}
}}

=={{int:license-header}}==
{{self|cc-by-sa-4.0}}

[[Category:Beijing Normal University]]
[[Category:Qi Gong artist]]
[[Category:Busts in Beijing]]
[[Category:Bronze busts]]
[[Category:Uploaded with UploadWizard]]';

        $wikitext = new WikiText($oldText);
        $wikitext->appendDerivativeVersionsTemplate('My new file.jpg');
        $this->assertEquals($newText, $wikitext);
    }

    public function testAppendFileToExistingDerivativeVersionsTemplate()
    {
        $oldText = '
{{Information
|description={{zh|1=北师大启功像1。}}
|date=2016-05-24 12:54:22
|source={{own}}
|author=[[User:三猎|三猎]]
|other_versions={{DerivativeVersions|HoryujiYumedono0363 edit1.jpg}}
|permission=public domain
}}

{{PD-self}}
';

        $newText = '
{{Information
|description={{zh|1=北师大启功像1。}}
|date=2016-05-24 12:54:22
|source={{own}}
|author=[[User:三猎|三猎]]
|other_versions={{DerivativeVersions|HoryujiYumedono0363 edit1.jpg|My new file.jpg}}
|permission=public domain
}}

{{PD-self}}
';

        $wikitext = new WikiText($oldText);
        $wikitext->appendDerivativeVersionsTemplate('My new file.jpg');
        $this->assertEquals($newText, $wikitext);
    }

    public function testAddDerivativeVersionsTemplateToOtherVersions2()
    {
        $oldText = "
== {{int:filedesc}} ==

{{Information
 |description = '''English:'''<br>
Algoma Steel<br>
photo taken from Wallace Terrace<br>
[[Sault Ste. Marie, Ontario|Sault Ste. Marie]], [[Ontario]], [[Canada]]<br>
30 June, 2006.
'''Français:'''<br>
l'Aciérie d'Algoma<br>
photographié à terrasse Wallace ÆØÅ<br>
Sault-S<sup>te</sup>-Marie, Ontario, Canada<br>
30 juin, 2006
 |date = {{According to EXIF data|2006-07-30}}
 |source = {{own assumed}}
 |author = {{Author assumed|[[User:Fungus Guy|Fungus Guy]]}}
 |permission = 
 |other_versions = 
}}

== {{int:license-header}} ==
{{Self|PD-self|author=Fungus Guy}}

[[Category:Essar Steel Algoma]]";

        $newText = "
== {{int:filedesc}} ==

{{Information
 |description = '''English:'''<br>
Algoma Steel<br>
photo taken from Wallace Terrace<br>
[[Sault Ste. Marie, Ontario|Sault Ste. Marie]], [[Ontario]], [[Canada]]<br>
30 June, 2006.
'''Français:'''<br>
l'Aciérie d'Algoma<br>
photographié à terrasse Wallace ÆØÅ<br>
Sault-S<sup>te</sup>-Marie, Ontario, Canada<br>
30 juin, 2006
 |date = {{According to EXIF data|2006-07-30}}
 |source = {{own assumed}}
 |author = {{Author assumed|[[User:Fungus Guy|Fungus Guy]]}}
 |permission = 
 |other_versions = {{Derivative versions|display=150|My new file.jpg}}
}}

== {{int:license-header}} ==
{{Self|PD-self|author=Fungus Guy}}

[[Category:Essar Steel Algoma]]";

        $wikitext = new WikiText($oldText);
        $wikitext->appendDerivativeVersionsTemplate('My new file.jpg');
        $this->assertEquals($newText, $wikitext);
    }


}
