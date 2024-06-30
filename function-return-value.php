<?php

function sum(int $first, int $second)
{
  return $first + $second;
}

sum(10,10);// tidak berguna karena nilai tidak disimpan
$total = sum(10,10);
echo $total . PHP_EOL;

// Return type declaration
// berlaku type jugling
function sum2(int $first, int $second): int
{
  // return [] error
  // return "1" diubah menjadi int
  // return true 
  return $first + $second;
}

echo sum2(10,10) . PHP_EOL;

