<?php
// Fungsi untuk menghitung jumlah pecahan uang yang diperlukan
function pecahanLembar($uang){
    // Mendefinisikan array pecahan uang dari yang terbesar ke terkecil
    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100);
    // Array untuk menyimpan jumlah pecahan masing-masing
    $jumlah = array();
    
    // Iterasi melalui setiap pecahan uang
    foreach ($pecahan as $value) {
        // Menghitung jumlah lembar untuk pecahan saat ini
        $jumlah[$value] = floor($uang / $value);
        // Mengupdate sisa uang yang belum dibagi
        $uang = $uang % $value;
    }
    // Mengembalikan array jumlah pecahan
    return $jumlah;
}

// Mendefinisikan nilai uang yang ingin dihitung pecahannya
$uang = 140500;
// Memanggil fungsi pecahanLembar untuk mendapatkan hasil pecahan
$hasil = pecahanLembar($uang);

// Menampilkan uang yang akan dihitung pecahannya dengan format yang sesuai
echo "Uang : Rp. " . number_format($uang, 0, ',', '.') . "<br>";

// Iterasi melalui hasil pecahan untuk menampilkan jumlah masing-masing pecahan
foreach ($hasil as $value => $jumlah) {
    // Menampilkan hanya pecahan yang memiliki jumlah lebih dari 0
    if ($jumlah > 0) {
        echo $jumlah . " x Rp. " . number_format($value, 0, ',', '.') . "<br>";
    }   
}
?>
