<?php

// Factorial Loop
function factorialLoop(int $value): int
{
  $total = 1;
  for ($i = 1; $i <= $value ; $i++) { 
    $total *= $i;
  }
  return $total;
}

function factorialRecursive(int $value): int
{
  if ($value == 1) {
    return 1;
  } else {
    return $value * factorialRecursive($value - 1);
    // factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1)
  }
}


var_dump(factorialLoop(5));
var_dump(factorialLoop(3));

var_dump(factorialRecursive(5));

// Catatan : bahaya memory flow
// php akan menyimpan recursive dalam stack
// jadi menumpuk
// berhenti di 333203
// solusinya gunakan perulangan biasa

function loop(int $value)
{
  if ($value == 0) {
    echo "Looping Selesai" . PHP_EOL;
  } else {
    echo "Perulangan ke-$value" . PHP_EOL;
    loop($value - 1);
  }
}

loop(3000000);