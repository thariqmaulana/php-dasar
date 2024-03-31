<?php

// membuat array
$values = array(1, 2, 3, 4.2);
var_dump($values);

$names = ["Thariq", "Maulana"];
var_dump($names);

// mengakses data di array'
var_dump($values[3]);

// mengubah data di array
$values[3] = 5.5;
var_dump($values[3]);

$values[] = "menambah";

var_dump($values);

// menghapus data dari array
// tapi indexnya hilang. jadi 0 langsung ke 2 misal yang dihapus index ke 1
unset($names[0]);
var_dump($names);

// array length
var_dump(count($names));



