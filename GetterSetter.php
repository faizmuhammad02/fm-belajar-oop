<?php

require_once "data/Category.php";
// digunakan untuk set dan get data di dalam object yang access nya private
$category = new Category();
$category->setName("handphone");
$category->setExpensive(true);
// $category->setName("");

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
