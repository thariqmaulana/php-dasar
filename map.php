<?php

// map di php dibuat dari array. tidak punya sintaks tersendiri. default array adalah int auto inc
$thariq = array(
  "id" => "thariq",
  "name" => "thariq maulana",
  23,
  200
);
// 23 index 0
// 200 = 1

// bisa juga menggunakan [] untuk membuat array. seperti di JS

var_dump($thariq);
var_dump($thariq["id"]);
var_dump($thariq["name"]);
