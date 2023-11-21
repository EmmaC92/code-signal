<?php

namespace Acme\Test;

use Acme\models\GrowingPlant;
use PHPUnit\Framework\TestCase;

class GrowingPlantTest extends TestCase {

    function testCase12() {
        $upSpeed = 100;
        $downSpeed = 10;
        $desiredHeight = 910;
        $result = GrowingPlant::growingPlant($upSpeed, $downSpeed, $desiredHeight);
        $expected = 10; 

        return $this->assertEquals($expected, $result);
    } 

    /*
    upSpeed: 7
    downSpeed: 3
    desiredHeight: 443
    */

    function testCase13() {
        $upSpeed = 7;
        $downSpeed = 3;
        $desiredHeight = 443;
        $result = GrowingPlant::growingPlant($upSpeed, $downSpeed, $desiredHeight);
        $expected = 110; 

        return $this->assertEquals($expected, $result);
    } 
}