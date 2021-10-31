<?php

//* 1. PHP dasar
//* 1.6. Constant pada PHP

//? Variable di PHP sifatnya mutable (dapat dirubah)
//? Jika kita ingin membuat yang sifatnya imutable (tidak bisa diubah), maka di PHP ada yang namanya "Constant"
//? Constant adalah tempat untuk menyimpan data yang tidak dapat diubah lagi isinya setelah dideklarasikan
//? Untuk membuat constant kita menggunakan fungsi define()
//? Best practice untuk pembuatan nama constant adalah menggunakan UPPER_CASE

define("DEVICE_NAME", "Galaxy A32");
define("ANDROID_VERSION", 11);

echo "Device : ";
echo DEVICE_NAME;
echo "\n";
