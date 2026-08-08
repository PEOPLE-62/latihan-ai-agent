<?php

$nama = "Muhammad";
$umur = 20;

echo "Nama: $nama";
echo "Umur: $umur";

if ($umur >= 18) {
    echo "Status: Dewasa";
} else {
    echo "Status: Belum Dewasa";
}

$tahunSekarang = date("Y");
$tahunLahir = $tahunSekarang - $umur;

echo "Tahun lahir: " . $tahunLahir;