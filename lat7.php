<?php

global $umur;

$namaBuah = ["Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis"];
echo "saya suka ". $namaBuah[0]. " ". $namaBuah[1]. " dan ". $namaBuah[2]. ".<br>";

// tampikan Mangga
echo "saya suka ". $namaBuah[1]. "<br>";

// tampikan Jeruk
echo "saya suka ". $namaBuah[2]. "<br>";

// tampikan Apel
echo "saya suka ". $namaBuah[3]. "<br>";

// tampikan Melon
echo "saya suka ". $namaBuah[4]. "<br>";

// array dengan spesifik index
$umur = ["Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"Tahun"];
$umur['ahmad']="50 Tahun";
echo "Umur Andi adalah ". $umur['Andi']. "<br>";

// tampikan semua umur
foreach ($umur as $nama => $tahun) {
    echo "Umur $nama adalah $tahun<br>";
}

?>