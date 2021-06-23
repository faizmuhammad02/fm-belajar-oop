<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function IsMaintenance(): bool;
}


interface Car extends HasBrand, IsMaintenance
{ // interface bisa extends beberapa interface tapi bukan kelas
    function drive(): void; // ini adalah function abstract
    function getTire(): int;
}

class Avanza implements Car, IsMaintenance // berbeda dengan extends, implements bisa terhubung dengan beberapa kelas
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int
    {
        return 4;
    }
    public function getBrand(): string
    {
        return "toyota";
    }
    public function isMaintenance(): bool
    {
        return true;
    }
}
