<?php

namespace Acme\test;

use PHPUnit\Framework\TestCase;
use Acme\models\Candles;

class CandlesTest extends TestCase
{
    function testCase39()
    {
        $solutionNumber = 5;
        $makeNew = 2;
        $result = Candles::candles($solutionNumber, $makeNew);
        $this->assertEquals(9, $result);
    }

    function testCase40()
    {
        $solutionNumber = 1;
        $makeNew = 2;
        $result = Candles::candles($solutionNumber, $makeNew);
        $this->assertEquals(1, $result);
    }

    function testCase41()
    {
        $solutionNumber = 3;
        $makeNew = 3;
        $result = Candles::candles($solutionNumber, $makeNew);
        $this->assertEquals(4, $result);
    }

    function testCase42()
    {
        $solutionNumber = 11;
        $makeNew = 3;
        $result = Candles::candles($solutionNumber, $makeNew);
        $this->assertEquals(16, $result);
    }
}