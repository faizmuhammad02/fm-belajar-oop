<?php

class Category
{
    private string $name;
    private bool $expensive;

    // bool menggunakan is
    // tipe data lain menggunakan get

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") { // cek apakah argument adalah string kosong
            $this->name = $name;
        } else {
            echo "tidak boleh kosong" . PHP_EOL;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
