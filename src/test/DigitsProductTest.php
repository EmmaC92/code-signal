<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\DigitsProduct;

class DigitsProductTest extends TestCase {
    
    function testCase27(){
        $product = 12;

        $result = DigitsProduct::digitsProduct($product);
        $expected = 26;
        $this->assertSame($expected, $result);
    }

    function testCase28(){
        $product = 19;

        $result = DigitsProduct::digitsProduct($product);
        $expected = -1;
        $this->assertSame($expected, $result);
    }

    function testCase29(){
        $product = 576;

        $result = DigitsProduct::digitsProduct($product);
        $expected = 889;
        $this->assertSame($expected, $result);
    }
}