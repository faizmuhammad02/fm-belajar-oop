<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1; // gunakan as jika saat import ada kelas yang sama
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APP as AP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
help();
echo AP . PHP_EOL;
