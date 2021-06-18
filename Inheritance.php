<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Faiz";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Dwi";
$vp->sayHello("Faiz");
