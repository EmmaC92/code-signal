<?php

namespace Acme\models;

class IsBeautifulString {

    static function isBeautifulString($inputString) {
        $alphabel = range('a', 'z');
        $previous = $current = 50;

        for ($i=0; $i < 26; $i++) { 
            $inputString = str_replace($alphabel[$i], '', $inputString, $current);

            if ($previous < $current){
                return false;
            }

            $previous = $current;
        }
        return true;
    }
}