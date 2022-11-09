<?php

namespace App\Helpers;

class Helpers
{

    /**
     * (32) 1321-3123 -> 3232131231
     * @param $value
     * @return string|string[]|null
     */
    static function convertFormatPhone($value)
    {
        return $value ? str_replace(["(", ")", "-", " "], "", $value) : '';
    }

}
