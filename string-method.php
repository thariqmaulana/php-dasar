<?php

// method untuk manipulasi string

// return string
var_dump(join("X", [1,2,3,4,5]));

// return arr
var_dump(explode("-", "thariq-maulana"));

// menghapus whitespace di depan & belakang
var_dump(trim("     thariq    "));

// angka kedua berhentinya dimana. jadi ini sampai index 5
var_dump(substr("Thariq Maulana", 0,6));
