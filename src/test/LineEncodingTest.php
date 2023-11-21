<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\LineEncoding;

class LineEncodingTest extends TestCase {

    public function testCase22(){
        $string = 'aabbbc';
        $result = LineEncoding::lineEncoding($string);
        $expected = '2a3bc';
        return $this->assertSame($expected, $result);
    }
    public function testCase23(){
        $string = 'abbcabb';
        $result = LineEncoding::lineEncoding($string);
        $expected = 'a2bca2b';
        return $this->assertSame($expected, $result);
    }
    public function testCase24(){
        $string = 'abcd';
        $result = LineEncoding::lineEncoding($string);
        $expected = 'abcd';
        return $this->assertSame($expected, $result);
    }
    public function testCase25(){
        $string = 'zzzz';
        $result = LineEncoding::lineEncoding($string);
        $expected = '4z';
        return $this->assertSame($expected, $result);
    }
}