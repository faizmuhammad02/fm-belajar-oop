<?php

class Product
{
    private string $name; // gabisa diakses dari luar kelas dan di subclass
    private int $price;
    protected int $stok = 11; // gabisa diakses dari luar kelas, tapi bisa lewat inheritance extend class

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Stok = $this->stok" . PHP_EOL;
    }
}
