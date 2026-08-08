<?php

require_once "data.php";
require_once "helper.php";

echo "Masukkan kata kunci pencarian: ";
$keyword = trim(fgets(STDIN));
$hasilPencarian = cariMahasiswa($mahasiswa, $keyword);

if (empty($hasilPencarian)) {
    echo "Tidak ada mahasiswa yang sesuai dengan pencarian." . PHP_EOL;
} else {
    foreach ($hasilPencarian as $data) {
        $status = tentukanStatus($data["nilai"]);

        echo $data["nama"] . " - ";
        echo $data["nilai"] . " - ";
        echo $status . PHP_EOL;
    }
}