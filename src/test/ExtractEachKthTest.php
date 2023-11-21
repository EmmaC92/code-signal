<?php
namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\ExtractEachKth;

class ExtractEachKthTest extends TestCase {

    function testCase7() {

        $class = new ExtractEachKth();
        $array =  [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $expected = [1, 2, 4, 5, 7, 8, 10];
        $result = $class->extractEachKth($array, 3);
        $this->assertEquals($result, $expected);
    }

    function testCase8() {
        $class = new ExtractEachKth();
        $array = [1, 2, 1, 2, 1, 2, 1, 2];
        $expected = [1, 2, 1, 2, 1, 2, 1, 2];
        $result = $class->extractEachKth($array, 10);
        $this->assertEquals($result, $expected);
    }
}