<?php
// 1. Membuat Array
$hari = array ("senin", "selasa", "rabu",);
$bulan = ["januari", "februari", "maret"];
$mhs = ["Sandhika", 3.2, false];
// 2. Mencetak Array (1)
//  cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan [2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
// cetak seluruh isi array
// var_dump() atau print_r()
// digunakan untuk debugging
var_dump($hari);
echo "<br>";
var_dump($bulan);
echo "<br>";
// 3. Manipulasi Array
// menambah isi array
// D belakanag: [] atau array_push()
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei");
print_r($bulan);
echo "<br>";
//  Di awal array
array_unshift($mhs, "233040045");
print_r($mhs);
echo "<hr>";

// menghapus isi array
//  di belakang: array_pop()
//  di depan : array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);
// 4. Mencetak Array (2)