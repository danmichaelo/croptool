<?php

namespace CropTool;

class WikiText {

    /** @var string */
    protected $text;

    protected $elem_matches = array(
        'tpl_remove_border' => '/{{\s*(crop|remove ?borders?)(\s*|\|[^\}]+)}}\s*/i',
        'tpl_watermark' => '/{{\s*(wmr|(remove |image)?water ?m(a|e)rk(ed)?)(\s*|\|[^\}]+)}}\s*/i',
        'cat_border' => '/\[\[category:images(?: |_)with(?: |_)borders\]\]\s*/i',
        'not_to_be_copied' => '/{{\s*(featured picture|quality image|picture of the day|assessments|(license|flickr|panoramio|openstreetmap|openphoto)[ -]?review)\s*(\|[^\}]+)?}}\s*/i',
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

        if (preg_match($this->elem_matches['tpl_remove_border'], $this->text)) $data['border'] = true;
        if (preg_match($this->elem_matches['tpl_watermark'], $this->text)) $data['watermark'] = true;
        if (preg_match($this->elem_matches['cat_border'], $this->text)) $data['border'] = true;

        return $data;
    }

    /**
     * @param $elems
     * @return array
     */
    public function removeStuff($elems)
    {
        $removed = array();

        if (isset($elems->border) && $elems->border) {
            $t2 = preg_replace(array(
                $this->elem_matches['tpl_remove_border'],
                $this->elem_matches['cat_border'],
            ), array('', ''), $this->text);
            if ($t2 != $this->text) $removed['border'] = true;
            $this->text = $t2;
        }
        if (isset($elems->watermark) && $elems->watermark) {
            $t2 = preg_replace($this->elem_matches['tpl_watermark'], '', $this->text);
            if ($t2 != $this->text) $removed['watermark'] = true;
            $this->text = $t2;
        }

        return $removed;
    }

    /**
     * Some templates should not be copied to new files.
     *  - License review templates per <https://github.com/danmichaelo/croptool/issues/41>
     *  - Assessment templates per <https://github.com/danmichaelo/croptool/issues/69>
     */
    public function removeTemplatesNotToBeCopied()
    {
        $this->text = preg_replace($this->elem_matches['not_to_be_copied'], '', $this->text);
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
     * @return bool
     */
    public function addBefore($newText, $searchText)
    {
        // 'pz' specifies: multiline perl-mode (http://docs.php.net/mb_regex_set_options)
        $res = $this->search($searchText);
        if ($res === false) {
            return false;
        }
        $start = $res[0];
        $this->text = rtrim(substr($this->text, 0, $start)) . "\n" . $newText . "\n\n" . ltrim(substr($this->text, $start));
        return true;
    }

    /**
     * Appends the {{Extracted from}} template.
     *
     * @param string $name  Name of the original file
     */
    public function appendExtractedFromTemplate($name)
    {
        $tpl = "{{Extracted from|" . $name . "}}";

        // Try to add before the license header
        if ($this->addBefore($tpl, '==\s*\{\{\s*int:license-header\s*\}\}\s*==')) {
            return;
        }

        // Try to add before the first category
        if ($this->addBefore($tpl, '\[\[\s*category:')) {
            return;
        }

        // Last option: just append it at the end
        $this->text .= $tpl;
    }

    /**
     * Appends the {{Derivative versions}} template.
     * Note to self: Use substr, not mb_substr
     *
     * @param string $name  Name of the new file
     */
    public function appendDerivativeVersionsTemplate($name)
    {
        // If the page already contains a {{DerivativeVersions}} template, append the file to it
        list($start, $length) = $this->search('{{\s*derivative ?(versions|works?)(\s*|\|[^\}]+)}}');
        if (!is_null($start)) {
            // Append |$name before the }} of the template
            $this->text = substr($this->text, 0, $start + $length - 2) . "|" . $name . substr($this->text, $start + $length - 2);
            return;
        }

        // Otherwise, try adding the template
        $tpl = '{{Derivative versions|display=150|' . $name . '}}';

        // If the 'other_versions' field is present, try adding it there:
        list($start, $length) = $this->search('other[ _]versions\s*\= ?');
        if (!is_null($start)) {
            $this->text = substr($this->text, 0, $start + $length) . $tpl . substr($this->text, $start + $length);
            return;
        }

        // Try to add before the license header
        if ($this->addBefore($tpl, '==\s*\{\{\s*int:license-header\s*\}\}\s*==')) {
            return;
        }

        // Try to add before the first category
        if ($this->addBefore($tpl, '\[\[\s*category:')) {
            return;
        }

        // Last option: just append it at the end
        $this->text .= $tpl;
    }

}
