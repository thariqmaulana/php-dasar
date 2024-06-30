<?php

// reference adalah mengakses variabel yg sama dengan nama yg berbeda
// jadi seperti membuat nama ke-2
// jika kita mengubah value si reference maka akan berdampak ke aslinya


// Tanpa reference
$name = "thariq";

$otherName = $name;
$otherName = "Said";

echo $name . PHP_EOL; // tetap thariq
echo $otherName . PHP_EOL;

echo PHP_EOL;

// dengan Reference

$nama = "thariq";

$namaLain = &$nama;
$namaLain = "said";

echo $nama . PHP_EOL; // ikut berubah
echo $namaLain . PHP_EOL;

echo PHP_EOL;

// Pass By Reference

// Defaultnya
function increment(int $value)
{
  $value++;
}

$counter = 1;

increment($counter);
increment($counter);
increment($counter);
// aslinya itu
// increment(1) valuenya yg dikirim. bukan variabelnya. jadi tidak berpengaruh. 
// jadi passing by value

echo $counter . PHP_EOL;
// tentuk counter tidak akan bertambah karena dia hanya dikirim sebagai param
// lalu bagaimana agar pass by reference??
// tapi dengan reference ...


function increment2(int &$value)
{
  $value++;
}

$counter2 = 1;

increment2($counter2);
increment2($counter2);
increment2($counter2); 
//jadi 4 ikut berubah karena value++
// value disini langsung mewakili counter. jadi itu sebenarnya mengubah counter langsung
echo $counter2 . PHP_EOL;


// Returning Reference

function &getValue()
{
  static $value = 100; // kenapa static?
  // karena supaya tidak langsung terhapus setelah dieksekusi
  // agar kasus ini bisa jalan
  return $value;
}

$a = &getValue();
$a = 300;
//value pun ikut berubah menjadi 300.
// jadi membingungkan. usahakan jangan dipakai

$b = &getValue();
echo "b = $b" . PHP_EOL;
// sudah jadi 300 nilainya