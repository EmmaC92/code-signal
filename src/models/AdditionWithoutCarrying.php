<?php

namespace Acme\models;

// $param1 =  456;
// $param2 = 1734;

class AdditionWithoutCarrying {
    static function additionWithoutCarrying($param1, $param2)
    {
        $param1 = "$param1";
        $param2 = "$param2";

        $param1len = strlen($param1);
        $param2len = strlen($param2);

        if ($param1len < $param2len) {
            $param1 = str_pad($param1, $param2len, '0', STR_PAD_LEFT);
        } elseif ($param1len > $param2len) {
            $param2 = str_pad($param2, $param1len, '0', STR_PAD_LEFT);
        }

        $count = strlen($param2); 

        $result = '';

        for ($i=0; $i < $count; $i++) { 

            $new = strval($param1[$i] + $param2[$i]);

            $digit = $new[1] ?? $new[0];
            $result = "$result$digit";
        }
        return $result;
    }
}