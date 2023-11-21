<?php

namespace Acme\models;

class Rounders
{
    public static function rounders($n)
    {
        $count = strlen($n) - 1;
        $array = str_split(strrev($n));

        for ($i=0; $i < $count; $i++) {
            $current = $array[$i];
            if ($current >= 5) {
                $array[$i+1]++;
            }
        }
        return $array[$count] . str_repeat('0', $count);
    }
}
