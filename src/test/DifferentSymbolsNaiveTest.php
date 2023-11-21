<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\DifferentSymbolsNaive;

class DifferentSymbolsNaiveTest extends TestCase {

    function testCase10(){
        $class = new DifferentSymbolsNaive();
        $string = "cabca";
        $expeted = 3;
        $result = $class->differentSymbolsNaive($string);
        $this->assertEquals($result, $expeted);
    }
}