<?php

use CropTool\WikiText;

class WikiTextTest extends PHPUnit_Framework_TestCase
{
    public function testItRecognizesTheLicenseReviewTemplate()
    {
        $wt1 = new WikiText('abc [[Category:SomeCategory]] {{flickrreview}} def');
        $wt2 = new WikiText('abc [[Category:SomeCategory]] {{flickrreview|Dodo|November 30th, 2006}} def');
        $wt3 = new WikiText('abc [[Category:SomeCategory]] {{User:FlickreviewR/reviewed-fail-recent|Inmediahk|....|}} def');

        $this->assertTrue($wt1->waitingForReview());
        $this->assertFalse($wt2->waitingForReview());
        $this->assertTrue($wt3->waitingForReview());
    }

    public function testItRecognizesQualityAssessmentTemplates()
    {
        $wt1 = new WikiText('abc {{quality image}}');
        $wt2 = new WikiText('abc {{other image}}');

        $this->assertTrue($wt1->hasAssessmentTemplates());
        $this->assertFalse($wt2->hasAssessmentTemplates());
    }

    public function testItRemovesTheImagesWithBordersCategoryIfRequested()
    {
        $oldText = WikiText::make('abc [[Category:SomeCategory]] [[Category:Images with borders]][[Category:SomeOtherCategory]] def');
        $newText = $oldText->withoutBorderTemplate();

        $this->assertEquals(['border' => true], $oldText->possibleStuffToRemove());
        $this->assertEquals([], $newText->possibleStuffToRemove());

        $this->assertEquals('abc [[Category:SomeCategory]] [[Category:SomeOtherCategory]] def', $newText);
    }

    public function testItRemovesTheLowercasedImagesWithBordersCategoryIfRequested()
    {
        $wikitext = WikiText::make('abc [[Category:SomeCategory]] [[category:images with borders]][[Category:SomeOtherCategory]] def')
            ->withoutBorderTemplate();

        $this->assertEquals('abc [[Category:SomeCategory]] [[Category:SomeOtherCategory]] def', $wikitext);
    }

    public function testItRemovesTheUnderscoredImagesWithBordersCategoryIfRequested()
    {
        $wikitext = WikiText::make('abc [[Category:SomeCategory]] [[Category:Images_with_borders]][[Category:SomeOtherCategory]] def')
            ->withoutBorderTemplate();

        $this->assertEquals('abc [[Category:SomeCategory]] [[Category:SomeOtherCategory]] def', $wikitext);
    }

    public function testItRemovesTheCropTemplateIfRequested()
    {
        $wikitext = WikiText::make('abc {{Crop}} def')
            ->withoutBorderTemplate();

        $this->assertEquals('abc def', $wikitext);
    }

    public function testItRemovesTheRemoveBorderTemplateIfRequested()
    {
        $wikitext = WikiText::make('abc {{Remove border}} {{watermark}} def')
            ->withoutBorderTemplate();

        $this->assertEquals('abc {{watermark}} def', $wikitext);
    }

    public function testItRemovesQualityAssessmentTemplatesIfRequested()
    {
        $wikitext = WikiText::make('abc {{Valued_image|example}} ghi {{vi|example}} {{quality image | example}} {{license review}} {{watermark}} def [[Category:Quality images by Abc]] ]]')
            ->withoutTemplatesNotToBeCopied();

        $this->assertEquals('abc ghi {{watermark}} def ]]', strval($wikitext));
    }

    public function testItRemovesTheWatermarkTemplateIfRequested()
    {
        $oldText = WikiText::make('abc {{Remove border}} {{watermark}} def');
        $newText = $oldText->withoutWatermarkTemplate();

        $this->assertEquals(['watermark' => true, 'border' => true], $oldText->possibleStuffToRemove());
        $this->assertEquals(['border' => true], $newText->possibleStuffToRemove());

        $this->assertEquals('abc {{Remove border}} def', $newText);
    }

    public function testItAddsTheExtractedFromToOtherVersions()
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
|other versions={{Extracted from|My new file.jpg}}
}}

=={{int:license-header}}==
{{PD-old-70-1923}}


[[Category:Uploaded with UploadWizard]]
[[Category:Churches in Moscow]]
';

        $wikitext = WikiText::make($oldText)
            ->appendExtractedFromTemplate('My new file.jpg');

        $this->assertEquals($newText, $wikitext);
    }

    public function testItAddsTheExtractedFromTemplateBeforeCategories()
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

        $wikitext = WikiText::make($oldText)
            ->appendExtractedFromTemplate('My old file.jpg');

        $this->assertEquals($newText, $wikitext);
    }

    public function testItAppendsToExistingImageExtractedTemplate()
    {
        $oldText = '
{{Information
|description={{zh|1=北师大启功像1。}}
|date=2016-05-24 12:54:22
|source={{own}}
|author=[[User:三猎|三猎]]
|other_versions={{Image extracted|HoryujiYumedono0363 edit1.jpg}}
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
|other_versions={{Image extracted|HoryujiYumedono0363 edit1.jpg|My new file.jpg}}
|permission=public domain
}}

{{PD-self}}
';

        $wikitext = WikiText::make($oldText)
            ->appendImageExtractedTemplate('My new file.jpg');

        $this->assertEquals($newText, $wikitext);
    }


    /**
     * This test also test that multibyte wikitext is handled correctly
     */
    public function testItAddsTheImageExtractedTemplateToOtherVersions()
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
|other versions={{Image extracted|My new file.jpg}}
}}

=={{int:license-header}}==
{{self|cc-by-sa-4.0}}

[[Category:Beijing Normal University]]
[[Category:Qi Gong artist]]
[[Category:Busts in Beijing]]
[[Category:Bronze busts]]
[[Category:Uploaded with UploadWizard]]';

        $wikitext = WikiText::make($oldText)
            ->appendImageExtractedTemplate('My new file.jpg');

        $this->assertEquals($newText, $wikitext);
    }

    public function testItAddsImageExtractedTemplateToOtherVersions2()
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
 |other_versions = {{Image extracted|My new file.jpg}}
}}

== {{int:license-header}} ==
{{Self|PD-self|author=Fungus Guy}}

[[Category:Essar Steel Algoma]]";

        $wikitext = WikiText::make($oldText)
            ->appendImageExtractedTemplate('My new file.jpg');

        $this->assertEquals($newText, $wikitext);
    }

    public function testItRecognizesCropForWikidataTemplate()
    {
        $wt = new WikiText('abc {{Crop for Wikidata | Q16218635 }} def');
        $stuff = $wt->possibleStuffToRemove();

        $this->assertArraySubset([
        	'wikidata' => true,
        	'wikidata-item' => 'Q16218635'
        ], $stuff);
    }

    public function testItRecognizesCropForWikidataTemplateWithExtraParam()
    {
        $wt = new WikiText('abc {{Crop for Wikidata|Q16218635|Person on left (silver medal)}} def');
        $stuff = $wt->possibleStuffToRemove();

        $this->assertArraySubset([
        	'wikidata' => true,
        	'wikidata-item' => 'Q16218635'
        ], $stuff);
    }
}
