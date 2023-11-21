<?php

namespace Acme\test;

use Acme\models\Rounders;
use PHPUnit\Framework\TestCase;

class RoudersTest extends TestCase
{
    function testCase30()
    {
        $result = Rounders::rounders(15);
        $this->assertEquals(20, $result);
    }
}
