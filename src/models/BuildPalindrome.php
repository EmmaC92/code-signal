<?php

namespace Acme\models;

class BuildPalindrome {

    static function buildPalindrome($palin){

        if(self::checkPalindrome($palin)){
            return $palin;
        }
        $drome = strrev($palin);
        $count = strlen($drome);
        $palindrome = "$palin$drome";


        // var_dump($palindrome);

        for ($i=0; $i < $count; $i++) {
            if(self::checkPalindrome("$palin$drome")){
                $palindrome = "$palin$drome";
            }
            $drome = substr($drome, 1);

            // var_dump($palindrome);sleep(1);
        }

        return "$palindrome";
    }

    static function checkPalindrome($palindrome) {
        $count = strlen($palindrome) - 1;
        for ($i=0; $i < $count / 2; $i++) {
            if ($palindrome[$i] !== $palindrome[$count - $i]) {
                return false;
            }
        }
        return true;
    }
}