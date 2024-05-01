<?php
    // Array data siswa
    $siswa = [
        ["nama" => "Aldi", "poin" => 80],
        ["nama" => "Budi", "poin" => 90],
        ["nama" => "Charlie", "poin" => 100],
        ["nama" => "Deni", "poin" => 70],
        ["nama" => "Eka", "poin" => 95],
        ["nama" => "Fani", "poin" => 85],
        ["nama" => "Gita", "poin" => 100],
        ["nama" => "Hari", "poin" => 60],
    ];

    // a) Tampilkan poin siswa dengan nomor urut 5
    echo "a) Poin siswa dengan nomor urut 5: " . $siswa[4]["poin"] . "<br>";

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    echo "b) Nama siswa dengan poin 90:<br>";
    foreach ($siswa as $index => $value) {
        if ($value["poin"] == 90) {
            echo "- " . $value["nama"] . "<br>";
        }
    }
 
    // c) Tampilkan semua nama siswa yang memiliki poin 100
    echo "c) Nama siswa dengan poin 100:<br>";
    foreach ($siswa as $index => $value) {
        if ($value["poin"] == 100) {
            echo "- " . $value["nama"] . "<br>";
        }
    }
?>
