<?php

namespace Acme\test;
use PHPUnit\Framework\TestCase;
use Acme\models\LongestDigitsPrefix;

class LongestDigitsPrefixTest extends TestCase{

    function testCase15(){
        $input = '1234afs14';
        $result = LongestDigitsPrefix::longestDigitsPrefix($input);
        $expected = '1234';
        $this->assertEquals($expected, $result);
    }
}