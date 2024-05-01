<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Keliling Lingkaran</title>
</head>
<body>
    <?php
    // Definisi nilai jari-jari
    $jariJari = 15; // cm

    // Hitung keliling lingkaran
    $keliling = 2 * pi() * $jariJari;

    // Tampilkan hasil
    echo "Keliling lingkaran dengan jari-jari $jariJari cm adalah: " . $keliling . " cm";
    ?>
</body>
</html>