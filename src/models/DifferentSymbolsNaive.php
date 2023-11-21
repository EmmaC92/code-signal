<?php 

namespace Acme\models;

class DifferentSymbolsNaive {

    static function differentSymbolsNaive($s) {
        $chrsNum = 0;
        while (strlen($s) > 0) {
            $char = $s[0];
            $s = str_replace($char, "", $s);
            $chrsNum++;
        }
        return $chrsNum;
    }
}