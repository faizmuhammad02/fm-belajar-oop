<?php

require_once "data/Product.php";

$product = new Product("Apple", 20_000);
$info = new ProductDummy("Apple", 20_000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
echo $info->info() . PHP_EOL;
