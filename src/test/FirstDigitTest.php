<?php

namespace Acme\test;

use Acme\models\FirstDigit;
use PHPUnit\Framework\TestCase;

class FirstDigitTest extends TestCase {

    function testCase9(){
        $class = new FirstDigit();
        $string = "var_1__Int";
        $result = $class->firstDigit($string);
        $this->assertIsInt($result);
    }
}