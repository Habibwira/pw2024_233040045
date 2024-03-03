<?php

function tampilkanAngkaTerurut($jumlahAngka) {
    $counter = 1;
    for ($i = 1; $i <= $jumlahAngka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $counter++ . " ";
        }
        echo "<br>";
    }
}

$jumlahAngka = 5;
tampilkanAngkaTerurut($jumlahAngka);
?>
