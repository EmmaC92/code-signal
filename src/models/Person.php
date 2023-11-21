<?php

namespace Acme\models;

class AgeLessThan18 extends \exception {
    public static function ageValidator(int $age): self {
        return new static(
            sprintf("This person is very young. Age %d", $age)
        );
    }
}

class Person {

    private $age;
    private $name;
    private $lastname;

    private function __construct($age, $name, $lastname){

        $this->setAge($age);
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public static function register($age, $name, $lastname): self {
        return new static($age, $name, $lastname);
    }

    private function checkAge($age){
        if ($age < 18) {
            throw AgeLessThan18::ageValidator($age);
        }
    }

    public function getAge():int {
        return $this->age;
    }

    public function setAge(int $age){
        $this->checkAge($age);
        $this->age = $age;
        return $this;
    }
}

