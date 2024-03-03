<?php

function hitungLuasLingkaran($jariJari) {
    $luas = M_PI * $jariJari * $jariJari;
    return $luas;
}

function hitungKelilingLingkaran($jariJari) {
    $keliling = 2 * M_PI * $jariJari;
    return $keliling;
}

$jariJari = 10;
$luasLingkaran = hitungLuasLingkaran($jariJari);

echo "<strong>Menghitung Luas Lingkaran</strong><br>";
echo "Jari-jari = ($jariJari) cm <br>";
echo "Luas lingkaran = " . number_format($luasLingkaran, 1) . " cm<sup>2</sup><br>";
echo "<hr>";

$jariJariKeliling = 20;
$kelilingLingkaran = hitungKelilingLingkaran($jariJariKeliling);

echo "<strong>Menghitung Keliling Lingkaran</strong><br>";
echo "Jari-jari = $jariJariKeliling cm <br>";
echo "Keliling lingkaran = " . number_format(round($kelilingLingkaran, 1), 1) . " cm";
?>