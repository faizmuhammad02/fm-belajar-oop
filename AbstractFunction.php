<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->do();

$dog = new Dog();
$dog->name = "Dojo";
$dog->do();
