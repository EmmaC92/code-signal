<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\BishopAndPawn;

class bishopAndPawnTest extends TestCase {

    function testCase16() {

        $bishop = "a1";
        $pawn = "c3";
        $result = BishopAndPawn::bishopAndPawn($bishop, $pawn);
        $this->assertTrue($result);
    }
}