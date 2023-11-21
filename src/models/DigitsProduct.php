<?php

namespace Acme\models;

class DigitsProduct {

    static function digitsProduct($product) {
        $string = null;

        if ($product === 0) {
            $string = '10';
        }

        if ($product === 1) {
            $string = '1';
        }

        $keep = true;

        if ($string === null) {
            while ($keep) {
                switch(true){
                    case ($product % 9) === 0:
                        $product /= 9;
                        $string = '9' . $string;
                        break;
                    case ($product % 8) === 0:
                        $product /= 8;
                        $string = '8' . $string;
                        break;
                    case ($product % 7) === 0:
                        $product /= 7;
                        $string = '7' . $string;
                        break;
                    case ($product % 6) === 0:
                        $product /= 6;
                        $string = '6' . $string;
                        break;
                    case ($product % 5) === 0:
                        $product /= 5;
                        $string = '5' . $string;
                        break;
                    case ($product % 4) === 0:
                        $product /= 4;
                        $string = '4' . $string;
                        break;
                    case ($product % 3) === 0:
                        $product /= 3;
                        $string = '3' . $string;
                        break;
                    case ($product % 2) === 0:
                        $product /= 2;
                        $string = '2' . $string;
                        break;
                    default:
                        if ($product > 9) {
                            $string = -1;
                        }
                        $keep = false;
                        break;
                }
            }
        }
        return intval($string) ?: -1;
    }
}