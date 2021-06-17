<?php

class Person
{
    var ?string $name = null; // tipe data harus string
    var ?string $adress; // tambahkan ? untuk membolehkan value $adress = null
    var $country = "Indonesia"; // default value nya = Indonesia

    function sayHello(?string $name = null)
    {
        if (is_null($name)) {
            echo "Ini null, nama saya $this->name" . PHP_EOL;
        } else {
            echo "ini $name, nama saya $this->name" . PHP_EOL;
        }
    }
}
