<?php

namespace Acme\models;

/*
    You found two items in a treasure chest! The first item weighs weight1 and is worth value1,
    and the second item weighs weight2 and is worth value2. What is the total maximum value of
    the items you can take with you, assuming that your max weight capacity is maxW and you
    can't come back for the items later?

    Note that there are only two items and you can't bring more than one item of each type, i.e.
    you can't take two first items or two second items.
*/

class KnapsackLight {

    static public function knapsackLight($value1, $weight1, $value2, $weight2, $maxW) {

        $taken = 0;
        if ($maxW >= $weight1 + $weight2) {
            return $value1 + $value2;
        } else {
           
            if ($weight1 <= $maxW) {
                $taken = $value1;
                if ($value1 > $value2) {return $value1;}
            }

            if ($weight2 <= $maxW) {
                if ($value2 > $value1) {return $value2;}
                $taken = $value2;
            }

        }
        return $taken;
    }
}