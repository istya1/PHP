<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 PHP</title>
</head>

<body>
    <?php
    // variabel dalam php 
    $txt = "Selamat datang !";
    $txt2 = "Politeknik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p>isi Variabel txt adalah: $txt </p>";
    echo "<p>isi Variabel x adalah: $x </p>";
    echo "<p>isi Variabel y adalah: $y </p>";
    echo $x + $y;

    // PHP konstanta
    define("nama_konstanta", "{Istya Yulia}");
    echo "<br>" . nama_konstanta;
    ?>
</body>

</html>