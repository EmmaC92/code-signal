<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\KnapsackLight;

class KnapsackLightTest extends TestCase {

    /*
        For value1 = 10, weight1 = 5, value2 = 6, weight2 = 4, and maxW = 8, the output should be
        solution(value1, weight1, value2, weight2, maxW) = 10.
    */

    function testCase14(){

        $value1 = 10;
        $weight1 = 5;
        $value2 = 6;
        $weight2 = 4;
        $maxW = 8;
        
        $result = KnapsackLight::knapsackLight($value1, $weight1, $value2, $weight2, $maxW);
        $expected = 10;

        $this->assertEquals($expected, $result);
    }

    /*
        value1 = 10, weight1 = 5, value2 = 6, weight2 = 4, and maxW = 9, the output should be
        solution(value1, weight1, value2, weight2, maxW) = 16.
    */

    function testCase15(){

        $value1 = 10;
        $weight1 = 5;
        $value2 = 6;
        $weight2 = 4;
        $maxW = 9;
        
        $result = KnapsackLight::knapsackLight($value1, $weight1, $value2, $weight2, $maxW);
        $expected = 16;

        $this->assertEquals($expected, $result);
    } 
}