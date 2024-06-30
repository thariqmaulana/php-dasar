<?php

$a = 0;
echo "Awal :";
var_dump($a);

echo "Post Increment";
var_dump($a++);
var_dump($a);

echo "Post Decrement";
var_dump($a--);
var_dump($a);

echo "Pre Increment";
var_dump(++$a);
var_dump($a);

echo "Pre Decrement";
var_dump(--$a);
var_dump($a);

// post =datanya disimpan dahulu baru diubah
// pre = diubah dahulu baru disimpan

$c = $a++;
$b = ++$a;
var_dump($b);
var_dump($c);

