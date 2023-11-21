<?php

namespace Acme\models;

class ExtractEachKth {
    
    static function extractEachKth($inputArray, $k) {

        $currentPosition = intval(floor(count($inputArray) / $k));

        while($currentPosition > 0) {
            $position = ($currentPosition * $k) - 1;
            unset($inputArray[$position]);
            $currentPosition--;
        }
        
        return array_values($inputArray);
    }
}