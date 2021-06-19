<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample}; // mengimport class di namespace dengan cara grouping

$conflict1 = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();
