<?php

require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
echo $car->getTire() . PHP_EOL;
echo $car->getBrand() . PHP_EOL;
if ($car->isMaintenance() == true) {
    echo "telah di maintenance" . PHP_EOL;
} else {
    echo "belum di maintenance" . PHP_EOL;
}
