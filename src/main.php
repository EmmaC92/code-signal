<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Acme\models\Person;
use Acme\models\CountBlackCells;

$person = Person::register(18, 'john', 'lamar');


