<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Faiz";
$person->adress = "Perum";

echo "nama saya {$person->name}" . PHP_EOL;
echo "saya tinggal di {$person->adress}" . PHP_EOL;
echo "negara saya {$person->country}" . PHP_EOL;

// membuat objek berbeda dari class yang sama
echo "------------------------" . PHP_EOL;

$orang  = new Person();
$orang->name = "Budi";
$orang->adress = "Cimone";
$orang->country = "Pakistan"; // default value akan di replace dengan value yang baru (sebelumnya = Indonesia)

echo "nama saya {$orang->name}" . PHP_EOL;
echo "saya tinggal di {$orang->adress}" . PHP_EOL;
echo "negara saya {$orang->country}" . PHP_EOL;

var_dump($person);
var_dump($orang);

// kita bisa mengisolasi data-data per objeknya
