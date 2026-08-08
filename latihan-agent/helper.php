<?php

function tentukanStatus($nilai)
{
    return $nilai >= 70 ? "Lulus" : "Tidak Lulus";
}

function cariMahasiswa($mahasiswa, $keyword)
{
    if (!is_array($mahasiswa)) {
        return [];
    }

    $keywordLower = strtolower((string) $keyword);
    $hasil = [];

    foreach ($mahasiswa as $data) {
        if (!is_array($data) || !isset($data["nama"]) || !is_string($data["nama"])) {
            continue;
        }

        if (stripos(strtolower($data["nama"]), $keywordLower) !== false) {
            $hasil[] = $data;
        }
    }

    return $hasil;
}