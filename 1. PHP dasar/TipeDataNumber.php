<?php

//* 1. PHP Dasar
//* 1.2. Tipe data number pada PHP

//? Di PHP terdapat 2 jenis tipe data number, yaitu int dan float
//? (int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2)
//? (float) Bilangan pecahan
//? Di PHP juga bisa menambahkan _ (underscore) di angka, fungsinya hanya untuk memudahkan saat dibaca, underscore akan di-ignore saat program dijalankan 

// Int 
echo "Decimal : ";
var_dump(123);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x3A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore pada integer : ";
var_dump(12_500_000);

// Float
echo "Floating point : ";
var_dump(12.3);

echo "Floating point dengan underscore : ";
var_dump(1_500_020.88);

echo "Floating point dengan E notation (1.5 * 1000) : ";
var_dump(1.5e3);

echo "Floating point dengan E notation minus (1.8 * 0.001) : ";
var_dump(1.8e-3);

// Integer overflow
//? Kapasitas integer di PHP ada batasnya. 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
//? Jika terdapat number integer yang nilainya melebihi batas tersebut, maka secara otomatis number tersebut akan berubah menjadi floating point
echo "Integer overflow 32 bit : ";
var_dump(2147483647);

echo "Integer overflow 64 bit : ";
var_dump(9223372036854775807);
