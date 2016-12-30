<?php

namespace CropTool;

class WikiText
{
    protected $text;

    /*
    |--------------------------------------------------------------------------
    | Assessment templates
    |--------------------------------------------------------------------------
    | These should not be copied to new pages (See #69 and #82).
    | Pages having these templates should not be overwritten (See #83).
    */
    protected $assessmentTemplates = array(
        'featured[_ ]?picture', 'fp',
        'valued[_ ]image', 'vi',
        'quality[_ ]?image',
        'picture[_ ]of[_ ]the[_ ]day',
        'assessments', 'featured[_ ]picture[_ ]mul',
    );

    /*
    |--------------------------------------------------------------------------
    | License review templates
    |--------------------------------------------------------------------------
    | These should not be copied to new pages.
    | If any of these templates are present without any parameters, the image
    | is waiting for review and the user should not be allowed to crop it yet.
    */
    protected $licenseReviewTemplates = array(
        '(license|flickr|panoramio|openstreetmap|openphoto)[_ -]?review', // See #41
    );

    /*
    |--------------------------------------------------------------------------
    | License review error templates
    |--------------------------------------------------------------------------
    | If any of these templates are present, the image has possible license
    | issues that should be resolved before cropping the image.
    */
    protected $licenseReviewProblemTemplates = array(
        'User:FlickreviewR\/reviewed-(error|notmatching|nosource|fail-recent|blacklisted)',
    );

    /*
    |--------------------------------------------------------------------------
    | Other templates not to be copied
    |--------------------------------------------------------------------------
    | Templates other than assessment templates and license review templates
    | that should not be copied to the new page when uploading the cropped image
    | to a new page on Wikimedia Commons.
    */
    protected $otherTemplatesNotToBeCopied = array(
        'image[_ ]extracted|extracted|extracted[_ ](images?|file|photo)|cropped[_ ]version',
        'extractedfrom|extracted[_ ]image|ef|cropped|image extracted from',
        'FlickrVerifiedByUploadWizard',
        'User:FlickreviewR\/reviewed-[a-z]+',
    );

    /*
    |--------------------------------------------------------------------------
    | Categories not to be copied
    |--------------------------------------------------------------------------
    | Categories that should not be copied to the new page when uploading the
    | cropped image to a new page on Wikimedia Commons.
    */
    protected $categoriesNotToBeCopied = array(
        '(valued|quality)[_ ]images[_ ](by|of)[^\]]+',
    );

    /*
    |--------------------------------------------------------------------------
    | Remove border templates
    |--------------------------------------------------------------------------
    | Templates, with or without parameters, that should be removed from the
    | cropped image page if the user confirms the removal of the border.
    */
    protected $removeBorderTemplates = array(
        'crop',
        'remove[ _]?borders?',
    );

    /*
    |--------------------------------------------------------------------------
    | Remove border categories
    |--------------------------------------------------------------------------
    | Categories that should be removed from the cropped image page if the
    | user confirms the removal of the border.
    */
    protected $removeBorderCategories = array(
        'images(?: |_)with(?: |_)borders',
    );

    /*
    |--------------------------------------------------------------------------
    | Watermark templates
    |--------------------------------------------------------------------------
    | Templates, with or without parameters, that should be removed from the
    | cropped image page if the user confirms the removal of the watermark.
    */
    protected $watermarkTemplates = array(
        'wmr',
        'imagewatermark',
        '(remove[ _])?water[ _]?m[ae]rk(ed)?',
    );

    /*
    |--------------------------------------------------------------------------
    | Crop for Wikidata templates
    |--------------------------------------------------------------------------
    | Templates that indicate that the crop should be added to Wikidata and
    | the template removed.
    */
    protected $cropForWikidataTemplates = array(
        'Crop[ _]for[ _]Wikidata',
    );

    protected $patterns = array(
        'templates' => '/{{\s*%NAMES%\s*%PARAMS%}}\s*/i',
        'categories' => '/\[\[category:%NAMES%\]\]\s*/i',
    );

    /**
     * WikiText constructor.
     * @param string|WikiText $text
     */
    public function __construct($text)
    {
        $this->text = strval($text);
    }

    /**
     * @param string|WikiText $text
     * @return WikiText
     */
    public static function make($text)
    {
        return new self($text);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->text;
    }

    protected function compileTemplatePattern($templates, $withParams=true)
    {
        return str_replace(
            [
                '%NAMES%',
                '%PARAMS%'
            ],
            [
                '(' . implode('|', $templates) . ')',
                ($withParams ? '(\|([^\}]+))?' : '')
            ],
            $this->patterns['templates']
        );
    }

    protected function compileCategoryPattern($categories)
    {
        return str_replace(
            '%NAMES%',
            '(' . implode('|', $categories) . ')',
            $this->patterns['categories']
        );
    }

    /**
     * Test if the page is waiting for license review
     *
     * @return bool
     */
    public function waitingForReview()
    {
        $pattern1 = $this->compileTemplatePattern($this->licenseReviewTemplates, false);
        $pattern2 = $this->compileTemplatePattern($this->licenseReviewProblemTemplates, true);

        return preg_match($pattern1, $this->text) == true || preg_match($pattern2, $this->text) == true;
    }

    /**
     * Test if the page has any quality assessment templates
     *
     * @return bool
     */
    public function hasAssessmentTemplates()
    {
        $pattern = $this->compileTemplatePattern($this->assessmentTemplates);

        return preg_match($pattern, $this->text) == true;
    }

    /**
     * @return array
     */
    public function possibleStuffToRemove()
    {
        $data = array();

        if (preg_match($this->compileTemplatePattern($this->removeBorderTemplates), $this->text)) {
            $data['border'] = true;
        }
        if (preg_match($this->compileTemplatePattern($this->watermarkTemplates), $this->text)) {
            $data['watermark'] = true;
        }
        if (preg_match($this->compileCategoryPattern($this->removeBorderCategories), $this->text)) {
            $data['border'] = true;
        }
        if (preg_match($this->compileTemplatePattern($this->cropForWikidataTemplates), $this->text, $matches)) {
            $data['wikidata'] = true;
            $data['wikidata-item'] = trim($matches[3]);
        }

        return $data;
    }

    public function cloneIfModified($newText)
    {
        return ($newText == $this->text) ? $this : new self($newText);
    }

    /**
     * Remove {{remove border}} template and category
     *
     * @return WikiText
     */
    public function withoutBorderTemplate()
    {
        $text = preg_replace(array(
            $this->compileTemplatePattern($this->removeBorderTemplates),
            $this->compileCategoryPattern($this->removeBorderCategories),
        ), array('', ''), $this->text);

        return $this->cloneIfModified($text);
    }

    /**
     * Remove {{remove watermark}} template
     *
     * @return WikiText
     */
    public function withoutWatermarkTemplate()
    {
        $text = preg_replace($this->compileTemplatePattern($this->watermarkTemplates), '', $this->text);

        return $this->cloneIfModified($text);
    }

    /**
     * Remove {{Crop for Wikidata}} template
     *
     * @return WikiText
     */
    public function withoutCropForWikidataTemplate()
    {
        $text = preg_replace($this->compileTemplatePattern($this->cropForWikidataTemplates), '', $this->text);

        return $this->cloneIfModified($text);
    }

    /**
     * Remove templates that should not be copied to new files. See documentation
     * for $otherTemplatesNotToBeCopied above.
     *
     * @return WikiText
     */
    public function withoutTemplatesNotToBeCopied()
    {
        $templatePattern = $this->compileTemplatePattern(array_merge(
            $this->assessmentTemplates,
            $this->licenseReviewTemplates,
            $this->otherTemplatesNotToBeCopied
        ), true);

        $categoryPattern = $this->compileCategoryPattern($this->categoriesNotToBeCopied);
        $text = preg_replace([$templatePattern, $categoryPattern], ['', ''], $this->text);

        return $this->cloneIfModified($text);
    }

    /**
     * Get position and length of first instance of $searchText
     * @param string $searchText
     * @return array|bool
     */
    public function search($searchText)
    {
        // 'pz' specifies: multiline, case-insensitive (http://docs.php.net/mb_regex_set_options)
        mb_ereg_search_init($this->text, 'zi');
        return mb_ereg_search_pos($searchText, 'zi');
        // Note to self: mb_ereg_search_pos does NOT return multibyte positions, so we need to use substr, not mb_substr
    }

    /**
     * Adds $newText before $searchText if $searchText is found.
     * Otherwise do nothing.
     * @param string $newText
     * @param string $searchText
     * @return WikiText
     */
    public function addBefore($newText, $searchText)
    {
        // 'pz' specifies: multiline perl-mode (http://docs.php.net/mb_regex_set_options)
        $res = $this->search($searchText);
        if ($res === false) {
            return $this;
        }
        $start = $res[0];
        $text = rtrim(substr($this->text, 0, $start)) . "\n" . $newText . "\n\n" . ltrim(substr($this->text, $start));
        return $this->cloneIfModified($text);
    }

    protected function appendTemplate($tpl)
    {
        // If the 'other_versions' field is present, try adding it there:
        list($start, $length) = $this->search('other[ _]versions\s*\= ?');
        if (!is_null($start)) {
            $text = substr($this->text, 0, $start + $length) . $tpl . substr($this->text, $start + $length);
            return new self($text);
        }

        // Try to add before the license header
        $wt = $this->addBefore($tpl, '==\s*\{\{\s*int:license-header\s*\}\}\s*==');
        if ($wt !== $this) {
            return $wt;
        }

        // Try to add before the first category
        $wt = $this->addBefore($tpl, '\[\[\s*category:');
        if ($wt !== $this) {
            return $wt;
        }

        // Last option: just append it at the end
        return new self($this->text . $tpl);
    }

    /**
     * Appends the {{Extracted from}} template.
     *
     * @param string $name  Name of the original file
     * @return WikiText
     */
    public function appendExtractedFromTemplate($name)
    {
        $tpl = "{{Extracted from|" . $name . "}}";

        return $this->appendTemplate($tpl);
    }

    /**
     * Appends the {{Image extracted}} template.
     * Note to self: Use substr, not mb_substr
     *
     * @param string $name Name of the new file
     * @return WikiText
     */
    public function appendImageExtractedTemplate($name)
    {
        // If the page already contains a {{Image extracted}} template, append the file to it
        list($start, $length) = $this->search('{{\s*(extracted ?(images?|file|photo)?|image ?extracted|cropped version)\s*(\s*|\|[^\}]+)}}');
        if (!is_null($start)) {
            // Append |$name before the }} of the template
            $text = substr($this->text, 0, $start + $length - 2) . "|" . $name . substr($this->text, $start + $length - 2);
            return new self($text);
        }

        // Otherwise, try adding the template
        $tpl = '{{Image extracted|' . $name . '}}';

        return $this->appendTemplate($tpl);
    }
}
