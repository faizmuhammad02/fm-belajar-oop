<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); error karena location adalah kelas abstract

$city = new City();
$procince = new Province();
$country = new Country();
