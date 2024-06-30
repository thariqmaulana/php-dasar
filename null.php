<?php

$name = null;

var_dump($name);
echo "\n";
echo $name; // kosong

// mengecek sebuah variabel apakah null
// return boolean
// return 1 : true
var_dump(is_null($name)); 

// error. beda antara null dan variabel yg tidak ada
// is_null($tidakada);

// menghapus variabel
unset($name);
// echo $name; error

// check apakah variabel ada dan tidak null
var_dump(isset($name)); 

// is null error. isset tidak 