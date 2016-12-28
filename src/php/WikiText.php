<?php

namespace CropTool;

class WikiText
{
    protected $text;

    protected $elem_matches = array(
        'tpl_remove_border' => '/{{\s*(crop|remove ?borders?)(\s*|\|[^\}]+)}}\s*/i',
        'tpl_watermark' => '/{{\s*(wmr|(remove |image)?water ?m(a|e)rk(ed)?)(\s*|\|[^\}]+)}}\s*/i',
        'cat_border' => '/\[\[category:images(?: |_)with(?: |_)borders\]\]\s*/i',
        'not_to_be_copied' => '/({{\s*(featured( |_)picture|valued( |_)image|qualityimage|quality( |_)image|picture( |_)of( |_)the( |_)day|assessments|(license|flickr|panoramio|openstreetmap|openphoto)[ -]?review)\s*(\|[^\}]+)?}}\s*|\[\[category:(valued(_| )images(_| )of(_| )birds|Quality(_| )images|)( |_)(by|of)( |_).*\]\])/i',
        'tpl_waiting_for_review' => '/{{\s*flickrreview\s*}}/i',
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
     * Test if the page is waiting for license review
     *
     * @return bool
     */
    public function waitingForLicenseReview()
    {
        return preg_match($this->elem_matches['tpl_waiting_for_review'], $this->text) == true;
    }

    /**
     * @return array
     */
    public function possibleStuffToRemove()
    {
        $data = array();

        if (preg_match($this->elem_matches['tpl_remove_border'], $this->text)) {
            $data['border'] = true;
        }
        if (preg_match($this->elem_matches['tpl_watermark'], $this->text)) {
            $data['watermark'] = true;
        }
        if (preg_match($this->elem_matches['cat_border'], $this->text)) {
            $data['border'] = true;
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
            $this->elem_matches['tpl_remove_border'],
            $this->elem_matches['cat_border'],
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
        $text = preg_replace($this->elem_matches['tpl_watermark'], '', $this->text);

        return $this->cloneIfModified($text);
    }

    /**
     * Some templates should not be copied to new files.
     *  - License review templates per <https://github.com/danmichaelo/croptool/issues/41>
     *  - Assessment templates per <https://github.com/danmichaelo/croptool/issues/69>
     *
     * @return WikiText
     */
    public function withoutTemplatesNotToBeCopied()
    {
        $text = preg_replace($this->elem_matches['not_to_be_copied'], '', $this->text);

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
