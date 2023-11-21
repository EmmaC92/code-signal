<?php

namespace Acme\models;

class FirstDigit {
    
    static function firstDigit($inputString){

        $firstable = strlen($inputString);

        for ($i=0; $i < 10; $i++) { 
            $pos = strpos($inputString, "$i");
            $firstable = is_numeric($pos) && $pos < $firstable ? $pos : $firstable;
        }
        return $inputString[$firstable];
    }
}