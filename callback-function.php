<?php

// alternatif dari $filter($name);

function sayHello(string $name, callable $filter)
{
  // $filter($name)
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL ; 
}

sayHello("thariq", function (string $name)
{
  return strtoupper($name);
});
sayHello("thariq", fn($name) => strtoupper($name));