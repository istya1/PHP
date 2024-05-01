<?php
// Input
$gajiPokok = 3250000; // Gaji pokok
$tunjanganJabatan = 1200000; // Tunjangan jabatan
$pajak = 10; // Persentase pajak

// Hitung gaji kotor
$gajiKotor = $gajiPokok + $tunjanganJabatan;

// Hitung pajak
$pajakNilai = $gajiKotor * ($pajak / 100);

// Hitung gaji bersih
$gajiBersih = $gajiKotor - $pajakNilai;

// Output
echo "Gaji bersih Obi setiap bulan adalah Rp. " . number_format($gajiBersih, 0, ',', '.') . ".";
?>