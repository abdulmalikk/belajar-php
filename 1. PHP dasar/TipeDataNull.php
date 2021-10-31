<?php

//* 1. PHP dasar
//* 1.7. Tipe data null pada PHP

//? Tipe data null adalah tipe data yang merepresentasikan nilai kosong
//? Jika kita ingin mengosongkan nilai dari sebuah variable, maka kita bisa mengisinya dengan nilai null
//? Untuk memanggilnya, kita gunakan kata kunci "null" (case insensitive)

$day = "Sabtu";
echo "Sekarang adalah hari $day";
echo "\n";
// $day akan kita ubah isinya menjadi null
$day = null;
// Maka hasil echo di bawah ini, adalah null
echo "Sekarang adalah hari $day";
echo "\n";

//? Untuk mengecek apakah sebuah variable berisi null, gunakan fungsi is_null($variable)
//? Fungsi is_null($variable) akan mengembalikan nilai boolean
echo "Apakah day berisi Null? ";
// Maka hasil var_dump di bawah adalah true, karena $day berisi null
var_dump(is_null($day));
