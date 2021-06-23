<?php

namespace Data;

abstract class Animal // digunakan untuk memaksa class turunannya mengguanakan sebuah function yang ada di parent class
{
    public string $name;
    abstract public function do(): void; //abstart function ga boleh punya body {}
}

class Cat extends Animal
{
    public function do(): void
    {
        echo "Cat $this->name is Meowing" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function do(): void
    {
        echo "Dog $this->name is Barking"  . PHP_EOL;
    }
}
