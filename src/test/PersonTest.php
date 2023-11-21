<?php

namespace Acme\test;
use PHPUnit\Framework\TestCase;
use Acme\models\Person;

class PersonTest extends TestCase {

    /**
     * @test
     */
    public function testRegisterPerson(){
        $age = 18;
        $this->assertSame(
            $age,
            (Person::register(18, 'Gordon', 'Clark'))->getAge()
        );
    }

    /**
     * @test
     */
    public function testCasePersonIsYoung(){
        $age = 18;
        $this->assertSame(
            $age,
            (Person::register(18, 'Gordon', 'Clark'))->getAge()
        );
    }
}