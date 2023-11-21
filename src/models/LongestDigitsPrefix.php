<?php

namespace Acme\models;

class LongestDigitsPrefix {

    static function longestDigitsPrefix($inputString) {
        $pattern = '(^\d+)';
        preg_match($pattern, $inputString, $matches);
        return $matches[0];
    }
}