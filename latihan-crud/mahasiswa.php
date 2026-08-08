<?php

$mahasiswa = [
    [
        "nama" => "Taufiq",
        "nilai" => 85
    ],
    [
        "nama" => "Muammar",
        "nilai" => 65
    ],
    [
        "nama" => "Griyo",
        "nilai" => 90
    ]
];

$totalNilai = 0;
$jumlahMahasiswa = count($mahasiswa);

if ($jumlahMahasiswa === 0) {
    echo "Tidak ada data mahasiswa." . PHP_EOL;
} else {
    foreach ($mahasiswa as $data) {
        $nilai = $data["nilai"] ?? null;

        if (!is_numeric($nilai)) {
            $status = "Nilai tidak valid";
            echo $data["nama"] . " - " . ($nilai ?? "-") . " - " . $status . PHP_EOL;
            continue;
        }

        $totalNilai += $nilai;

        $status = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";

        echo $data["nama"] . " - " . $nilai . " - " . $status . PHP_EOL;
    }

    $rataRata = $totalNilai / $jumlahMahasiswa;
    echo "Rata-rata nilai: " . $rataRata;
}