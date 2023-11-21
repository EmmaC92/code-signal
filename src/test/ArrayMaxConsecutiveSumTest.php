<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\ArrayMaxConsecutiveSum;

class ArrayMaxConsecutiveSumTest extends TestCase {

    function testCase11() {
        $class = new ArrayMaxConsecutiveSum();
        $array = [2, 3, 5, 1, 6];
        $result = $class->arrayMaxConsecutiveSum($array, 2);
        $this->assertEquals(8, $result);
    }
}