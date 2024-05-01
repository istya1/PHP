<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 PHP</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307019">
    <meta name="author" content="Istya Yulia">
</head>
<body>
    <?php

    $t = date( "H" ); //mendapatkan jam dengan format 1-24
    echo "if <br>";
    if ($t < 16) {
        echo "Selamat siang!";
    }

    $t = date("H"); //mendapatkan jam dengan format 1-24
    echo "<br> If dan Else <br>";
    if ($t < 20) {
        echo "Selamat siang!";
    } else {
        echo "Selamat malam!";
    }

    echo "<br> Nested If <br>";
    if ($t < 20) {
        echo "Selamat pagi!";
    } elseif ($t < 16) {
        echo "Selamat sore!";
    } else {
        echo "Selamat Malam!";
    }

    ?>
</body>
</html>