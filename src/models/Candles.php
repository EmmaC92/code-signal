<?php

namespace Acme\models;

class Candles
{
    public static function candles($solutionNumber, $makeNew)
    {
        $leftover = 0;
        $totalCandles = $solutionNumber;

        while ($solutionNumber > 0) {
            $leftover += $solutionNumber;
            $solutionNumber = floor($leftover / $makeNew);
            $leftover = $leftover % $makeNew;
            $totalCandles += $solutionNumber;
        }
        return $totalCandles;
    }
}
