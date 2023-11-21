<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\AdditionWithoutCarrying;

class AdditionWithoutCarryingTest extends TestCase {

    function testCase12() {
        $class = new AdditionWithoutCarrying();
        $param1 = 456;
        $param2 = 1734;
        $result = $class->additionWithoutCarrying($param1, $param2);
        $this->assertEquals(1180, $result);
    }

    function testCase13() {
        $class = new AdditionWithoutCarrying();
        $param1 = 99999;
        $param2 = 0;
        $result = $class->additionWithoutCarrying($param1, $param2);
        $this->assertEquals(99999, $result);
    }

    function testCase14() {
        $class = new AdditionWithoutCarrying();
        $param1 = 999;
        $param2 = 999;
        $result = $class->additionWithoutCarrying($param1, $param2);
        $this->assertEquals(888, $result);
    }
}