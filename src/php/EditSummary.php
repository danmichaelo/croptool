<?php

namespace CropTool;

class EditSummary
{
    /**
     * @var array
     */
    private $parts;

    public function __construct()
    {
        $this->parts = [];
    }

    public function add($part)
    {
        $this->parts[] = $part;
    }

    public function build()
    {
        if (!count($this->parts)) {
            $res = 'updating';
        } else {
            $res = array_pop($this->parts);
            if (count($this->parts)) {
                $res = implode(', ', $this->parts) . ' and ' . $res;
            }
        }

        $res = mb_strtoupper(mb_substr($res, 0, 1)) . mb_substr($res, 1);

        return $res . ' using [[Commons:CropTool|CropTool]]';
    }

}
