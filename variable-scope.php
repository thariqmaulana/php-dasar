<?php

// 3 jenis var scope
// 1. global: diluar fn. tidak bisa diakses dari dalam fn. hanya bisa dari luar
// 2.local: hanya bisa dari fn itu sendiri. tidak bisa diluar
//  3.static

// GLOBAl
$name = "thariq"; //global

function sayName() 
{
  // echo $name;error
}

sayName();


// Local

function getValue()
{
  $value = 10;
}

// echo $value;error


// global keyword. membuat kita bisa mengakses var global dari dalam fn
// caranya adalah menulis global lalu nama var yg ingin diambil

function sayHi()
{
  global $name; // global keyword
  echo "Hi $name" . PHP_EOL;
}

sayHi();


// $GLOBAL Variable
// setiap var global disimpan oleh php dalam array $GLOBAl.
// jadi kita bisa akses $GLOBAL['namaVariabel']. nama var sebagai keys
// $GLOBAL bersifat superglobal. artinya bisa diakses dari scope manapun

function sayWow()
{
  // echo "Wow $GLOBALS["name"]";err
  echo "Wow {$GLOBALS["name"]}" . PHP_EOL;
  // echo $GLOBALS["name"];
}

sayWow();


// Static Scope
// asalnya var local itu siklus hidupnya akan terhapus setelah fn dijalankan
// cara agar var tetap ada adalah dengan static

function increment()
{
  $counter = 1;

  echo "Counter = $counter" . PHP_EOL;

  $counter++;
}

increment();//1
increment();//1
increment();//1

function increment2()
{
  static $counter = 1;

  echo "Counter Static = $counter" . PHP_EOL;

  $counter++;
}

// data akan tersimpan dan mengambil value sebelumnya
increment2();
increment2();
increment2();

// 1. dicek apakah sebelumnya ada var counter
// 2. kalau belum maka akan dibuat dan di set static scope
// 3. lalu pemanggilan selanjutnya akan di cek
// 4. karena ada maka tidak akan dibuat ulang, namun dipakai yg sebelumnya