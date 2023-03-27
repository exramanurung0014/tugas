<?php
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];

echo  "  Bilangan pertama:" . $no1  . "<br>";
echo " Bilangan kedua :" . $no2 . "<br>";

$tambah = $no1 + $no2;
echo " Hasil Tambah = " . $tambah . "<br>";


$kurang = $no1 - $no2;
echo " Hasil kurang= " . $kurang . "<br>";

$kali = $no1 * $no2;
echo " Hasil kali= " . $kali . "<br>";

$bagi = $no1 / $no2;
echo " Hasil bagi= " . $bagi . "<br>";
//()
//{}
//[]
