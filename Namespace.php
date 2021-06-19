<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$dataOne = new \Data\One\Conflict();
$dataTwo = new \Data\Two\Conflict();

echo Helper\APP . PHP_EOL; // memangil const didalam namspace Helper
Helper\helpMe(); // memangil function helpMe() didalam namspace Helper
