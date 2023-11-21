<?php

namespace Acme\models;

class CountBlackCells
{

    static function countBlackCells($n, $m)
    {
        if ($n == $m) {
            return ($n*3) - 2;
        }

        $lower = min($n, $m);
        $higher = max($n, $m);

        $distance = $higher / $lower;
        $count = 0;

        $fraction = 0;

        for ($i=0; $i < $lower; $i++) {
            $newDistance = $distance + $fraction;
            $decimal = explode('.', $newDistance);
            $count += (int)count($decimal) < 2 ? (int)$decimal[0] : (int)$decimal[0] + 1; //ceil($newDistance); 

            if ($lower == $i + 1){
                continue;
            }

            if ( count($decimal) < 2 ){
                $count += 2;
                $fraction = 0;
                continue;
            }

            $rest = ($newDistance - $decimal[0]);

            $fraction = $rest;
        }

        return $count;
    }
}