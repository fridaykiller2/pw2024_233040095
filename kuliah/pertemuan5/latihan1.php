<?php
// 1. membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["January", "Febuary", "Maret"];
$mahasiswa = ["Riza", "Alif", "pasha", 2.5, false];

// 2. mencetak array
// mencetak 1 elemen pada array, menggunakan index
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// mencetak seluruh array
// digunakan khusus untuk debungging
// var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";





// 3. memanipulasi isi array
// menambah isi array
// di akhir array: [] atau array_push()
$hari[] = "kamis";
$hari[] = "jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei", "juni", "july");
print_r($bulan);
echo "<br>";

// di awal array: array_unshift()
array_unshift($mahasiswa, "022040095");
print_r($mahasiswa);
echo "<br>";

// menghapus isi array
// di akhir : array_pop()
// di awal : array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);



echo "<br>";