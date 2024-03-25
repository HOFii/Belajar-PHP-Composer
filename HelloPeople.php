<?php

require_once __DIR__ . '/vendor/autoload.php';

use Smkbm3\Data\People;

$people = new People("Gusti");

echo $people->sayHello("Elaina") . PHP_EOL;

