<?php

class Manager
{
    var string $name;
    var string $title;
    public function __construct(string $name = "", string $title = "Manager") //kasih default value untuk argument
    {
        $this->name = $name;
        $this->title = $title;
    }
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is {$this->title} {$this->name}" . PHP_EOL;
    }
}

class VicePresident extends Manager // function overriding menimpa function yang ada di class parent
{
    public function __construct(string $name = "") //override __contruct dapat merubah jumlah argument
    {
        //pemanggilan function __construct untuk meng override class child tidak wajib, tapi direkomendasikan 
        // parent::__construct($name, "VicePresident"); // hardcode "VP"
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP {$this->name}" . PHP_EOL;
    }
}
