<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict; // tidak bisa memanngil 2 class yang sama dengan use
use function Helper\helpMe; // memanggil function helMe() di namespace Helper
use const Helper\APP; // memanggil constant di namespace Helper

$conflict1 = new Conflict(); // mengacu pada use diatas
$conflict2 = new \Data\Two\Conflict();

helpMe();
echo APP . PHP_EOL;
