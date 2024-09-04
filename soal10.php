<?php

$umur = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];

function usia ($umur) {
    if ($umur < 17) {
        return 'anak-anak';
    } else {
        return 'dewasa';
    }
}

// array_map ini akan menerapkan fungsi usia ke array umur
$hasil = array_map ('usia', $umur);

// Menghitung jumlah "dewasa"
// fungsi anonim yang digunakan di dalam array_filter memerlukan parameter yang disebut 
// $kategori. Fungsi ini digunakan untuk memeriksa setiap elemen dari array $hasil.
$jumlah_dewasa = count(array_filter($hasil, function($kategori) {
    return $kategori == 'dewasa';
}));

// Menghitung jumlah "anak-anak"
$jumlah_anak = count(array_filter($hasil, function($kategori) {
    return $kategori == 'anak-anak';
}));

echo "list usia : " . implode(", ", $umur) . "<br>";
echo "\nJumlah dewasa: $jumlah_dewasa <br>";
echo "Jumlah anak-anak: $jumlah_anak <br>";

?>