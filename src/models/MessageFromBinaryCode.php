<?php

namespace Acme\models;

class MessageFromBinaryCode {

    static function messageFromBinaryCode($code){
        $letters = array_map(function ($a) {return chr(bindec($a));}, str_split($code, 8));
        return implode($letters);
    }
}