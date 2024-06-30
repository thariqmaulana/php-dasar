<?php 

echo 'Nama : ';
echo 'Thariq   Maulana';
echo "\n";
echo '\n';
echo "\n";

// escape sequence tidak bisa di petik 1

echo "Nama : ";
echo "Thariq \t Maulana";
echo "\n";

// multiline string 
// daripada \n terus

// Heredoc
// biasanya tagnya uppercase
echo <<<BEBAS
Saya sedang belajar PHP
ini adalah multiline    string
menggunakan heredoc
BEBAS;

echo "\n";

// Nowdoc
// Nowdoc tidak bisa parsing variabel
// perlu pakai ''
echo <<<'BEBAS'
Saya sedang belajar PHP
ini adalah multiline    string
menggunakan nowdoc
BEBAS;  


// anggap saja nowdoc seperti '', heredoc ""