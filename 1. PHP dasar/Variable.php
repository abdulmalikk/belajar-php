<?php

//* 1. PHP dasar
//* 1.5. Variable pada PHP

//? Variable adalah tempat untuk menyimpang sebuah data, yang dapat digunakan lagi pada kode program selanjutnya
//? Untuk membuat variable di PHP, menggunakan $ (tanda dolar), lalu diikuti nama variablenya
//? Penamaan variable tidak boleh menggunakan spasi
//? Di PHP, jika kita membuat sebuah variable, maka di kode selanjutnya kita bisa mengubah isi nilai / tipe data dari variable tersebut

$name = "Abdul";
$age = 19;

echo "Nama saya $name \n";
echo "Umur saya $age tahun \n";

// mengubah isi dari variable
$age = 18;
echo "Umur tahun lalu $age tahun";
