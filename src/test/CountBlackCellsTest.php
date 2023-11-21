<?php

namespace Acme\test;

use Acme\models\CountBlackCells;
use PHPUnit\Framework\TestCase;

class CountBlackCellsTest extends TestCase {

    public function testCountBlackCells1()
    {
        $n = 3;
        $m = 4;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(6, $result);
    }

    public function testCountBlackCells2()
    {
        $n = 3;
        $m = 3;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(7, $result);
    }

    public function testCountBlackCells3()
    {
        $n = 2;
        $m = 5;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(6, $result);
    }

    public function testCountBlackCells4()
    {
        $n = 1;
        $m = 1;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(1, $result);
    }

    public function testCountBlackCells5()
    {
        $n = 1;
        $m = 2;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(2, $result);
    }

    public function testCountBlackCells6()
    {
        $n = 1;
        $m = 3;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(3, $result);
    }

    public function testCountBlackCells7()
    {
        $n = 1;
        $m = 239;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(239, $result);
    }

    public function testCountBlackCells8()
    {
        $n = 33;
        $m = 44;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(86, $result);
    }

    public function testCountBlackCells9()
    {
        $n = 16;
        $m = 8;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(30, $result);
    }

    public function testCountBlackCells10()
    {
        $n = 66666;
        $m = 88888;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(177774, $result);
    }

    public function testCountBlackCells11()
    {
        $n = 3;
        $m = 7;
        $countBlackCells = new CountBlackCells();

        $result = $countBlackCells->countBlackCells($n, $m);

        return $this->assertEquals(9, $result);
    }
}