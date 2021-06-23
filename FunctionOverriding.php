<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Dwi";
$manager->sayHello("Faiz");

$vp = new VicePresident();
$vp->name = "Faiz";
$vp->sayHello("Dwi");
