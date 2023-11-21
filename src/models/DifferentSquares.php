<?php

namespace Acme\models;

class DifferentSquares {

    static function differentSquares($matrix){
        $count = count($matrix) - 1;
        $count2 = count($matrix[0]) - 1;

        $arrays = [];

        for($i=0;$i < $count;$i++){
            for($j=0;$j < $count2;$j++){
                $newArray = $matrix[$i][$j] . $matrix[$i][$j+1] . $matrix[$i+1][$j] . $matrix[$i+1][$j+1];
                if(!isset($arrays[$newArray])){
                    $arrays[$newArray] = true;
                }
            }
        }

        return count($arrays);
    }
}