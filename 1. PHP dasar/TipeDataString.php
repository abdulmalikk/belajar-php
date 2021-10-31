<?php

//* 1. PHP dasar
//* 1.4. Tipe data string pada PHP

//? Tipe data string adalah tipe data yang merepresentasikan teks
//? String bisa berisi kosong atau banyak karakter
//? String di PHP dapat dibuat dengan 4 cara. Yaitu Single quote, Double quote, Heredoc, dan Nowdoc

// Single quote
echo 'Nama depan : ';
echo 'Abdul';
echo "\n";

// Double quote
//? Kelebihan menggunakan Double quote adalah, kita bisa menggunakan espace sequence seperti \n untuk ENTER, \t untuk TAB, dan lain-lain
echo "Nama lengkap : ";
echo "Abdul\t Malik \n";

// Heredoc
//? Heredoc adalah fitur untuk membuat string yang panjang, dan tidak perlu melakukan enter, tab, dan lain-lain secara manual
echo <<<COBA
PHP dasar
ini adalah contoh string dengan Heredoc
ini adalah baris ke-3
COBA;

// Nowdoc
//? Nowdoc mirip dengan Heredoc, perbedaannya adalah, Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double quote
echo <<<'COBA2'
ini adalah contoh membuat string dengan Nowdoc
ini baris ke-2
mirip dengan Heredoc
COBA2;
