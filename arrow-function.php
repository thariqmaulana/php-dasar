<?php

// ver.7.4++
// alternatif anonym func. sebenarnya 2 hal yang sama
// hanya untuk anonym func yang sederhana dan return value
//  var global bisa digunakan disini secara default
// tidak perlu use
// tidak menggunakan function, tapi fn
// tidak perlu menulis return. karena default harus ada return

$firstName = "Thariq";
$lastName = "Maulana";

$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;

var_dump($sayHello());





