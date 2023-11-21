<?php

namespace Acme\models;

class ArrayMaxConsecutiveSum {
    static function arrayMaxConsecutiveSum($inputArray, $k){

        $countLength = count($inputArray) - $k;
        $currentSum = $result = array_sum(array_slice($inputArray, 0, $k));

        // [2, 3, 5, 1, 6]
        for ($i=0; $i < $countLength; $i++) {
            $currentSum -= $inputArray[$i];
            $currentSum += $inputArray[$i + $k];
            $result < $currentSum && ($result = $currentSum);
        }
        return $result;
    }
}