<?php
$angka1 = 10;
$angka2 = 5;
//Operasi Tambah (+)
$hasil = $angka1 + $angka2;
echo "Hasil dari $angka1 + $angka2 = $hasil";

//Operasi Kurang (-)
$hasil = $angka1 - $angka2;
echo "\nHasil dari $angka1 - $angka2 = $hasil";
$angka1 = 15;
$hasil = $angka1 - $angka2;
echo "\nHasil dari $angka1 - $angka2 = $hasil";

$hasil = $angka1 * $angka2;
echo "\nHasil dari $angka1 * $angka2 = $hasil";
$angka1 = 10;
$angka2 = 2;
$hasil = $angka1 . $angka2;
echo "\nHasil dari $angka1  $angka2 = $hasil";

$angka1 = 10;


$hasil = $angka1 / $angka2;
echo "\nHasil dari $angka1 / $angka2 = $hasil";


$hasil = $angka1 % $angka2;
echo "\nHasil dari $angka1 % $angka2 = $hasil";



$string = "Hello";
$string2 = $string . " dan dream";

echo "\n$string";  
echo "\n$string2";  


$message = "Tagihan anda adalah Rp.100.000";
$final_message = $message . " harus dibayar sekarang juga";
$message .= " dan harus dibayar sekarang juga";

echo "\n$final_message";
echo "\n$message";

$angka = 20;

//algoritma

$angka = 20;
$angka -= 5;
echo "\n $angka";

$angka = 20;
$angka *= 5;
echo "\n $angka";


$angka = 20;
$angka /= 5;
echo "\n $angka";


$angka = 20;
$angka = $angka + 10;
$angka += 10;
echo "\n $angka  \n";
var_dump($angka);