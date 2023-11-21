<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\IsBeautifulString;

class IsBeautifulStringTest extends TestCase {

    function testCase17() {
        $string = 'bbbaacdafe';
        $result = IsBeautifulString::isBeautifulString($string);
        $this->assertTrue($result);
    }

    function testCase18() {
        $string = 'aabbb';
        $result = IsBeautifulString::isBeautifulString($string);
        $this->assertFalse($result);
    }
}