<?php

// seperti export-import JS  

// pada require jika file yg diambil tidak ada maka error dan program berhenti
// pada include hanya akan memberi warning

require "Lib/my-function.php";
// require "Lib/my-functionsalah.php"; error

echo sayHello("Thariq", "Maulana");

// tulislah require/include di paling atas kode. karena jika pemanggilan
// terletak lebih atas dari require maka akan error
// karena dibaca dari ataas ke bawah

// function yg sudah ada dibuat ulang tidak boleh di php. Redeclaring fn
// jadi gunakan _once
// require lagi
// require "Lib/my-function.php"; error redclare

require_once "Lib/my-function.php"; // yang pertama akan meload
require_once "Lib/my-function.php"; // akan mengecek apakah sudah pernah di load. jika sudah tidak akan meload ulang