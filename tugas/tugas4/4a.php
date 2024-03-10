<?php

$teks = "Masa depanmu diciptakan oleh apa yang kau kerjakan hari ini, bukan esok";

$kata_yang_digarisbawahi= array("Masa", "depanmu", "diciptakan", "kerjakan", "bukan", "esok");

$hasil = "";

foreach (explode(" ", $teks) as $kata) {
    if (in_array($kata, $kata_yang_digarisbawahi)) {
        $kata_modifikasi = "";
        for ($i = 0; $i < strlen($kata); $i++) {
            $kata_modifikasi .= "<span style='text-decoration: underline yellow;'>".$kata[$i]."</span>";
        }
        $hasil .= $kata_modifikasi;
    } else {
        $hasil .= $kata;
    }
    $hasil .= " ";
}

$hasil = rtrim($hasil);

echo $hasil;

?>