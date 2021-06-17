<?php

require_once "data/Person.php";

define("APPVERSION", "INI APP VERSION");

echo APPVERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;//untuk mengakses konstan didalam class
