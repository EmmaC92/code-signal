<?php

namespace Acme\models;

class LineEncoding {

    // aabbbc
    static function lineEncoding($s){
        $string = '';
        $count = 1;
        $currentLetter = $s[0];
        $stringLength = strlen($s);

        for($i = 1; $i < $stringLength; $i++) {
            $a = $s[$i];
            if($currentLetter === $a) {
                $count++;
            } else {
                $string .= $count > 1 ? "$count$currentLetter" : $currentLetter;
                $count = 1;
            }
            $currentLetter = $a;
        }
        $string .= $count > 1 ? "$count$currentLetter" : $currentLetter;

        return $string;
    }
}