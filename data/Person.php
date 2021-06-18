<?php

class Person
{
    const AUTHOR = "Faiz Noor Muhammad";
    var ?string $name = null; // tipe data harus string
    var ?string $adress; // tambahkan ? untuk membolehkan value $adress = null
    var $country = "Indonesia"; // default value nya = Indonesia

    function __construct(string $name, ?string $adress)
    // jika di dalam construct ada argument, saat memanggil objek wajib memasukkan argumen juga
    {
        $this->name = $name;
        $this->adress = $adress;
    }

    function sayHello(?string $name = null)
    {
        echo "Author : " . self::AUTHOR . PHP_EOL; //mengakses konstan didalam class itu sendiri gunakan "self"
        if (is_null($name)) {
            echo "Ini null, nama saya $this->name" . PHP_EOL; //$this digunakan untuk akses objek saat ini dimana function
        } else {
            echo "ini $name, nama saya $this->name" . PHP_EOL;
        }
    }
}
