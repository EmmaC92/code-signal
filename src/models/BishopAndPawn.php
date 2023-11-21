<?php

namespace Acme\models;

class BishopAndPawn {

    static function bishopAndPawn($bishop, $pawn) {
        if (self::moveBishopRightUp($bishop, $pawn)) return true;
        if (self::moveBishopRightDown($bishop, $pawn)) return true;
        if (self::moveBishopLeftUp($bishop, $pawn)) return true;
        if (self::moveBishopLeftDown($bishop, $pawn)) return true;
        return false;
    }
    
    static function moveBishopRightUp($bishop, $pawn){
        while($pawn !== $bishop && !self::isLimit($bishop)){
            $array = str_split($bishop);
            $array[0] = self::changeLetter($array[0], '+');
            $array[1]++;
            $bishop = $array[0] . $array[1];
        }

        return $pawn === $bishop;
    }

    static function moveBishopRightDown($bishop, $pawn){
        while($pawn !== $bishop && !self::isLimit($bishop)){
            $array = str_split($bishop);
            $array[0] = self::changeLetter($array[0], '+');
            $array[1]--;
            $bishop = $array[0] . $array[1];
        }

        return $pawn === $bishop;
    }

    static function moveBishopLeftUp($bishop, $pawn){
        $array = str_split($bishop);
        $array[0] = self::changeLetter($array[0], '-');
        $array[1]++;
        $bishop = $array[0] . $array[1];
        while($pawn !== $bishop && !self::isLimit($bishop)){
            $array = str_split($bishop);
            $array[0] = self::changeLetter($array[0], '-');
            $array[1]++;
            $bishop = $array[0] . $array[1];
        }

        return $pawn === $bishop;
    }

    static function moveBishopLeftDown($bishop, $pawn){
        while($pawn !== $bishop && !self::isLimit($bishop)){
            $array = str_split($bishop);
            $array[0] = self::changeLetter($array[0], '-');
            $array[1]--;
            $bishop = $array[0] . $array[1];
        }

        return $pawn === $bishop;
    }

    static function changeLetter($letter, $operator){
        $alphabet = ['Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
        $position = array_search($letter, $alphabet);
        $position = $position + ($operator === '+' ? 1 : -1);
        return $alphabet[$position];
    }

    static function isLimit($bishop) {
        return is_numeric(strpos($bishop, 'Z')) ||
            is_numeric(strpos($bishop, 'i')) ||
            is_numeric(strpos($bishop, '0')) ||
            is_numeric(strpos($bishop, '9'))
        ;
    }
}