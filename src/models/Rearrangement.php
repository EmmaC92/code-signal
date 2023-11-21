<?php

namespace Acme\models;

class Rearrangement {

    static function stringsRearrangement($inputArrayOriginal) {

        foreach ($inputArrayOriginal as $value) {
            if (self::BFS($inputArrayOriginal, $value)){
                return true;
            }
        }
        return false;
    }

    function BFS($array, $input) {

        foreach ($array as $key => $value) {
            if (self::isDifferentBy1($input, $value)) {
                unset($array[$key]);
                if (empty($array)){
                    return true;
                }
                if (!self::BFS($array, $value)) {
                    $array[$key] = $value;
                } else {
                    return true;
                }
            }
        }

        return false;
    }

    static function isDifferentBy1($first, $second) {
        $first = str_split($first);
        $second = str_split($second);
        $array_diff_count = count(array_diff_assoc($first, $second));
        return $array_diff_count == 1;
    }
}