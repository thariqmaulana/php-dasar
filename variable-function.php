<?php

function functionHello()
{
  echo "Hello" . PHP_EOL;
}

$sayHello = "functionHello";
$sayHello();


// filter disini kan function yang dijadikan variable
function sayHi(string $name, $filter): void
{
  $finalName = $filter($name);
  echo "Hi $finalName" . PHP_EOL;
} 

function sampleFunction(string $name): string
{
  return "Sample $name";
}

// sayHi("Thariq", strtoupper); error
sayHi("Thariq", "strtoupper");
sayHi("Thariq", "sampleFunction");
