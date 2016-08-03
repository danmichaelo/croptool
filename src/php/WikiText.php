<?php

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
     * Appends the {{Extracted from}} template.
     *
     * @param string $extractedFrom  Name of the original file
     */
    public function appendExtractedFromTemplate($extractedFrom)
    {
        $tpl = "\n{{Extracted from|" . $extractedFrom . "}}\n";

        // Add template before the first category if possible, otherwise just append it at the end
        $x = mb_stripos($this->text, "\s*[[category:");
        if ($x !== false) {
            $this->text = mb_substr($this->text, 0, $x) . $tpl . mb_substr($this->text, $x);
        } else {
            $this->text .= $tpl;
        }
    }

}
