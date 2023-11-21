<?php

namespace Acme\test;
use PHPUnit\Framework\TestCase;
use Acme\models\DifferentSquares;

class DifferentSquaresTest extends TestCase{

    public function testCase26(){
        $matrix = [
            [1, 2, 1],
            [2, 2, 2],
            [2, 2, 2],
            [1, 2, 3],
            [2, 2, 1]
        ];

        $result = DifferentSquares::differentSquares($matrix);
        $expected = 0;
        $this->assertSame($expected, $result);
    }

}