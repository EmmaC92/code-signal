<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\BuildPalindrome;

class BuildPalindromeTest extends TestCase {

    public function testCase18(){
        $st = 'abcdc';
        $result = BuildPalindrome::buildPalindrome($st);
        $expected = 'abcdcba';

        $this->assertSame(
            $expected,
            $result
        );
    }

    public function testCase19(){
        $st = 'ababab';
        $result = BuildPalindrome::buildPalindrome($st);
        $expected = 'abababa';

        $this->assertSame(
            $expected,
            $result
        );
    }

    public function testCase20(){
        $st = 'abba';
        $result = BuildPalindrome::buildPalindrome($st);
        $expected = 'abba';

        $this->assertSame(
            $expected,
            $result
        );
    }

    public function testCase21(){
        $st = 'abaa';
        $result = BuildPalindrome::buildPalindrome($st);
        $expected = 'abaaba';

        $this->assertSame(
            $expected,
            $result
        );
    }
}