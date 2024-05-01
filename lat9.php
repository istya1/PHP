<?php

// Contoh fungsi

function writeMsg($nama) {
    echo "Selamat datang " . $nama . "<br>";
}

// Pemanggilan fungsi
writeMsg("Ahmad");

// Fungsi dengan mengirim nilai balik
function tambah(int $angka1, int $angka2) {
    $hasil = $angka1 + $angka2;
    return $hasil;
}

// Mengirim nilai kembali dari fungsi tambah
$hasil = tambah( angka1: 5 , angka2: 5);
echo "Hasil penjumlahan adalah: " . $hasil;
?>
