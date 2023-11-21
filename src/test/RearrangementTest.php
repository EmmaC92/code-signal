<?php

use PHPUnit\Framework\TestCase;
use Acme\models\Rearrangement;

class RearrangementTest extends TestCase {

    function testCase4() {

        $class = new Rearrangement();
        $array = [
            "zzzzab",
            "zzzzbb",
            "zzzzaa"
        ];
        $result = $class->stringsRearrangement($array);
        $this->assertTrue($result);
    }

    function testCase5() {

        $class = new Rearrangement();
        $array = [
            "ab",
            "ad",
            "ef",
            "eg"
        ];
        $result = $class->stringsRearrangement($array);
        $this->assertFalse($result);
    }

    function testCase6() {

        $class = new Rearrangement();
        $array = [
            "abc", 
            "bef", 
            "bcc", 
            "bec",
            "bbc",
            "bdc"
        ];
        $result = $class->stringsRearrangement($array);
        $this->assertTrue($result);
    }
}