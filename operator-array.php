<?php

$firstName = [
  "first_name" => "Thariq"
];

$lastName = [
  "last_name" => "Maulana"
];

$fullName = $firstName + $lastName;
var_dump($fullName); // sebuah array yang berisi 2 index. yang masing masingnya adalah arr
// kalau ada data yang sama maka array yang pertama yang diutamakan
// ???

$a = [
  "first" => "thariq",
  "last" => "maulana"
];

$b = [
  "last" => "maulana",
  "first" => "thariq"
];

var_dump($a == $b);
var_dump($a === $b);