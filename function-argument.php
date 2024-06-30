<?php

// default argument value
function sayHello($name="Anonim")
{
  echo "Halo $name" . PHP_EOL;
}

sayHello();
sayHello("Thariq");

// default kalau di awal tidak berguna karena tidak bisa sepeerti ini
// sayHello(, "thariq")

// function sayHi($firstName="Kosong", $lastName)
// {
//   echo "Halo $firstName $lastName" . PHP_EOL;
// } error

function sayHi($firstName, $lastName="Kosong")
{
  echo "Halo $firstName $lastName" . PHP_EOL;
}

sayHi("Thariq");
// sayHi(, "Maulana") tidak bisa seperti ini. argumen pertama harus diisi. bakal error
// ditengah pun akan error
// jadi di param terakhir

// Type Declaration
// jika tidak sesuai akan error
// type juggling berlaku

function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL ;
}

sum(100, 100);
sum("100", "100");
sum(true, false); //
// sum([],[]); error

// variable-length argument list
// seperti rest parameter JS
// hanya bisa di param terakhir

// function sumAll(array $values)
// {
//   $total = 0;
//   foreach ($values as $value) {
//     $total += $value;
//   }
//   echo "Total dari " . implode("-", $values) . " = $total" . PHP_EOL;
// }

// sumAll([10,20,30,40,50]);

function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total dari " . implode("-", $values) . " = $total" . PHP_EOL;
}

sumAll(10,20,30,40,50);//semua param ini akan dikonversi menjadi array lalu disimpan di values
// bagaimana jika sudah terlanjur dalam bentuk array?
$data = [10,20,30];
sumAll(...$data);
// echo "...$data";