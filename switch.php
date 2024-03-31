<?php

$nilai = "A";

switch ($nilai) {
  case "A": 
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
    break;
  case "B":
  case "C": 
    echo "Anda lulus" . PHP_EOL;
    break;
  case "D": 
    echo "Anda tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Error anda mungkin tidak ikut ujian" . PHP_EOL;
}