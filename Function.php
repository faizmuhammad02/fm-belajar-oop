<?php

require_once "data/Person.php";

$person = new Person();

$person->sayHello("Faiz");

$null = new Person();
$null->sayHello();
