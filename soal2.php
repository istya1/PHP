<?php
// Input
$nominal = 1387500; // Jumlah uang yang akan ditarik
$denomination = [100000, 50000, 20000, 10000, 5000, 2000, 500]; // Daftar uang pecahan

// Inisialisasi
$sisa = $nominal;
$pecahan = [];

// Hitung banyaknya uang pecahan
foreach ($denomination as $value) {
    if ($value > $sisa) {
        continue;
    }
    $jumlah = intdiv($sisa, $value);
    $sisa %= $value;
    $pecahan[$value] = $jumlah;
}

// Output
echo "Ani akan mendapatkan uang pecahan sebagai berikut:\n";
foreach ($pecahan as $denom => $count) {
    echo "- Rp. " . number_format($denom, 0, ',', '.') . " x " . $count . "lembar\n";
}
?>