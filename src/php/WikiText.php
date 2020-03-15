<?php

namespace CropTool;

class WikiText
{
    const TEMPLATES = 'templates';
    const CATEGORIES = 'categories';

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
    | Do not crop templates
    |--------------------------------------------------------------------------
    | Pages having these templates should not be overwritten.
    */
    protected $doNotCropTemplates = array(
        'do[_ ]not[_ ]crop',
        'border[_ ]is[_ ]intentional',
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
        '(license|flickr?|panoramio|openstreetmap|openphoto)[_ -]?reviewr?', // See #41 and #117
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
        'extract( ?images?)?',
        'image[_ ]extracted|extracted|extracted[_ ](images?|file|photo)|cropped[_ ]version',
        'extractedfrom|extracted[_ ]image|ef|cropped|image extracted from',
        'FlickrVerifiedByUploadWizard',
        'User:FlickreviewR\/reviewed-[a-z]+',
        'picture[_ ]of[_ ]week',
        '(permission|Разрешение|ConfirmationImage)? ?OTRS[ -]?(ID|permission)?',
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
    | Trimming templates
    |--------------------------------------------------------------------------
    | Templates, with or without parameters, that should be removed from the
    | cropped image page if the user confirms that the image has been trimmed.
    */
    protected $trimmingTemplates = array(
        'trimming',
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
        'templates' => '{{\s*%NAMES%\s*%PARAMS%}} *',
        'categories' => '\[\[category:%NAMES%\]\] *',
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

    /**
     * Generate a regular expression pattern that matches given templates or categories.
     *
     * @param string $type What to match (templates or categories).
     * @param string[] $names The names of the templates/categories to match.
     * @param bool $withParams If true, the pattern will match templates with parameters,
     *     otherwise only templates with no parameters will be matched.
     *     For categories, this option has no effect.
     * @param bool $surroundingLinebreaks Only match templates/categories surrounded by linebreaks
     *     (having linebreaks both before and after the template/category).
     * @return string
     */
    protected function compilePattern($type, $names, $withParams=true, $surroundingLinebreaks=false)
    {
        $withParams = ($type == self::CATEGORIES) ? false : $withParams;

        $out = str_replace(
            [
                '%NAMES%',
                '%PARAMS%'
            ],
            [
                '(' . implode('|', $names) . ')',
                ($withParams ? '(\|([^\}\|]+)(?:\|[^\}]+)?)?' : '')
            ],
            $this->patterns[$type]
        );

        if ($surroundingLinebreaks) {
            return "/\n *$out *\n/i";
        }
        return "/$out/i";
    }

    /**
     * Remove text that matches a given pattern. If the pattern is surrounded by linebreaks,
     * one linebreak will be removed to avoid double linebreaks in the result.
     *
     * @param $type
     * @param $pattern
     * @param bool $withParams
     * @return WikiText
     */
    protected function removePattern($type, $pattern, $withParams=true)
    {
        $text = $this->text;

        // If linebreaks on both sides of the pattern, remove one of them.
        $text = preg_replace($this->compilePattern($type, $pattern, $withParams, true), "\n", $text);

        // Otherwise, preserve linebreaks.
        $text = preg_replace($this->compilePattern($type, $pattern, $withParams), '', $text);

        return $this->cloneIfModified($text);
    }

    /**
     * Test if the page is waiting for license review
     *
     * @return bool
     */
    public function waitingForReview()
    {
        $pattern1 = $this->compilePattern(self::TEMPLATES, $this->licenseReviewTemplates, false);
        $pattern2 = $this->compilePattern(self::TEMPLATES, $this->licenseReviewProblemTemplates, true);

        return preg_match($pattern1, $this->text) == true || preg_match($pattern2, $this->text) == true;
    }

    /**
     * Test if the page has any quality assessment templates
     *
     * @return bool
     */
    public function hasAssessmentTemplates()
    {
        $pattern = $this->compilePattern(self::TEMPLATES, $this->assessmentTemplates);

        return preg_match($pattern, $this->text) == true;
    }

    /**
     * Test if the page has {{do not crop}}
     *
     * @return bool
     */
    public function hasDoNotCropTemplate()
    {
        $pattern = $this->compilePattern(self::TEMPLATES, $this->doNotCropTemplates);

        return preg_match($pattern, $this->text) == true;
    }

    /**
     * @return array
     */
    public function possibleStuffToRemove()
    {
        $data = array();

        if (preg_match($this->compilePattern(self::TEMPLATES, $this->removeBorderTemplates), $this->text)) {
            $data['border'] = true;
        }
        if (preg_match($this->compilePattern(self::TEMPLATES, $this->trimmingTemplates), $this->text)) {
            $data['trimming'] = true;
        }
        if (preg_match($this->compilePattern(self::TEMPLATES, $this->watermarkTemplates), $this->text)) {
            $data['watermark'] = true;
        }
        if (preg_match($this->compilePattern(self::CATEGORIES, $this->removeBorderCategories), $this->text)) {
            $data['border'] = true;
        }
        if (preg_match($this->compilePattern(self::TEMPLATES, $this->cropForWikidataTemplates), $this->text, $matches)) {
            if (isset($matches[3])) {
                $data['wikidata'] = true;
                $data['wikidata-item'] = trim($matches[3]);
            } else {
                // No Q ID was given to the template.. We should perhaps warn the user, but just ignore the template for now.
            }
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
        return $this->removePattern(self::TEMPLATES, $this->removeBorderTemplates)
            ->removePattern(self::CATEGORIES, $this->removeBorderCategories);
    }

    /**
     * Remove {{trimming}} template and category
     *
     * @return WikiText
     */
    public function withoutTrimmingTemplate()
    {
        return $this->removePattern(self::TEMPLATES, $this->trimmingTemplates);
    }

    /**
     * Remove {{remove watermark}} template
     *
     * @return WikiText
     */
    public function withoutWatermarkTemplate()
    {
        return $this->removePattern(self::TEMPLATES, $this->watermarkTemplates);
    }

    /**
     * Remove {{Crop for Wikidata}} template
     *
     * @return WikiText
     */
    public function withoutCropForWikidataTemplate()
    {
        return $this->removePattern(self::TEMPLATES, $this->cropForWikidataTemplates);
    }

    /**
     * Remove templates that should not be copied to new files. See documentation
     * for $otherTemplatesNotToBeCopied above.
     *
     * @return WikiText
     */
    public function withoutTemplatesNotToBeCopied()
    {
        return $this->removePattern(
            self::TEMPLATES,
            array_merge(
                $this->assessmentTemplates,
                $this->licenseReviewTemplates,
                $this->otherTemplatesNotToBeCopied
            ),
            true
        )->removePattern(
            self::CATEGORIES,
            $this->categoriesNotToBeCopied
        );
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
        $tpl = "{{Extracted from|1=" . $name . "}}";

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

            // Find out how many existing arguments there are
            $tplText = substr($this->text, $start, $length);
            preg_match_all('/\|/', $tplText, $out);
            $argNo = (isset($out[0]) ? count($out[0]) : 0) + 1; // $out is an array of all matches in a multi-dimensional array

            // Append |$name before the }} of the template
            $text = substr($this->text, 0, $start + $length - 2) . "|$argNo=" . $name . substr($this->text, $start + $length - 2);
            return new self($text);
        }

        // Otherwise, try adding the template
        $tpl = '{{Image extracted|1=' . $name . '}}';

        return $this->appendTemplate($tpl);
    }

    protected function prepend($line)
    {
        return new self($line . '\n' . $this->text);
    }

    /**
     * Prepends {{subst:orfurrev}} to crops of non-free media on English Wikipedia.
     * @see https://github.com/danmichaelo/croptool/issues/146
     */
    public function addOrfurrev()
    {
        return $this->prepend('{{subst:orfurrev}}');
    }
}
