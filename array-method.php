<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$dataBaru = array_map(fn(int $value) => $value * 10 , $data);
var_dump($data); // tidak merubah array asli;
var_dump($dataBaru);

// reverse sort. DSC: Descending
rsort($data);// merubah array asli
var_dump($data);

sort($data);// merubah arr asli
var_dump($data);

// return arr keys dalam bentuk arr tentunya
var_dump(array_keys($data));

// return values
var_dump(array_values($data));

