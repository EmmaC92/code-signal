<?php

namespace Acme\test;

use Acme\models\FileNaming;
use PHPUnit\Framework\TestCase;

class FileNamingTest extends TestCase {
    
    function testCase29(){
        $names = ["doc", "doc", "image", "doc(1)", "doc"];

        $result = FileNaming::fileNaming($names);
        $expected = ["doc", "doc(1)", "image", "doc(1)(1)", "doc(2)"];

        $this->assertSame($expected, $result);
    }
}