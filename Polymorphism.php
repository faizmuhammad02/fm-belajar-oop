<?php

require_once "data/Programmer.php";

//polymorphism merubah property atau data yang di set dari perent
// sehingga bisa pake bentuk object turunannya (child)
// polymorphism bisa dimasukkan ke properties atau argument

$company = new Company();
$company->programmer = new Programmer("Faiz");
var_dump($company);
$company->programmer = new BackendProgrammer("Faiz");
var_dump($company);
$company->programmer = new FrontendProgrammer("Faiz");
var_dump($company);

sayHelloProgrammer(new Programmer("Faiz")); // karena tipe nya programmer jadi bisa di set new Programmer
sayHelloProgrammer(new FrontendProgrammer("Faiz")); // karena tipe nya programmer jadi bisa di set new Programmer
sayHelloProgrammer(new BackendProgrammer("Faiz")); // karena tipe nya programmer jadi bisa di set new Programmer
