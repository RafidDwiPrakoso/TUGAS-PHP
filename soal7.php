<?php
$nama1 = "Tegar Badruzzaman";
$nama2 = "Rafid Dwi Prakosoo";

$jumlah1 = strlen($nama1);
$jumlah2 = strlen($nama2);;


if ($jumlah1 > $jumlah2) {
    echo "nama pertama : $nama1 <br>";
    echo "nama kedua : $nama2 <br>";
    $total = $jumlah1 - $jumlah2;
    echo $nama1 . " memiliki jumlah karakter lebih banyak dari " . $nama2 . " : selisih " . $total . " karakter";
} elseif ($jumlah2 > $jumlah1) {
    echo "nama pertama : $nama1 <br>";
    echo "nama kedua : $nama2 <br>";
    $total = $jumlah2 - $jumlah1;
    echo $nama1 . " memiliki jumlah karakter lebih kecil dari " . $nama2 . " : selisih " . $total . " karakter";
} else {
    echo "nama pertama : $nama1 <br>";
    echo "nama kedua : $nama2 <br>";
    echo "karakter kedua dan karakter pertama sama panjang";
}
?>