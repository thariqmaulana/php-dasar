<?php

// di php anonym func = closure

// bisa menulis anonym func sebagai parameter

// jangan lupa titik koma di akhir bracket jika membuat anonym func

$sayHello = function (string $name)
{
  echo "Hello $name" . PHP_EOL;
};

// jadinya bisa variable func

$sayHello("Thariq");

function sayGoodBye(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Goodbye $finalName" . PHP_EOL;
}

sayGoodBye("thariq", function (string $name): string {
  return strtoupper($name);
}); //perlu ; disini


// anonym func secara default tidak bisa mengakses variable di luar func walau global

$firstName = "Thariq";
$lastName = "Maulana";

// data disini tidak akan diubah. nilainya akan tetap thariq maulana, walaup fName diubah. tetap di nilai awal
$sayHelloThariq = function () use ($firstName, $lastName) 
{
  echo "USE Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloThariq();