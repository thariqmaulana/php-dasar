<?php

$string = (string)100;
$integer = (int)"100";
$integersalah = (int)"salah"; // kalau tidak valid jadi 0. jadi tidak error
$float = (float)"100";
$floatsalah = (float)"salah";

var_dump($string);
var_dump($integer);
var_dump($integersalah);
var_dump($float);
var_dump($floatsalah);