<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 PHP</title>
</head>

<body>
    <?php
    $x = 5;
    $y = 10;

    //Aritmetic operators
    echo "Penambahan " . $x + $y . "<br>";
    echo "Pengurangan " . $x - $y . "<br>";
    echo "Perkalian " . $x * $y . "<br>";
    echo "Pembagian " . $x / $y . "<br>";
    echo "Modulus " . $x % $y . "<br>";
    echo "Exponensial " . $x ** $y . "<br>";
    echo ("<br>");

    //Assigment operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y * 2
    echo "Penambahan x " . $x . "<br>";
    echo "Perkalian y " . $y . "<br>";
    echo ("<br>");

    //Increment/Decrement operators
    echo "Isi ++x = " . ++$x . "<br>";
    echo "Isi x++ = " . $x++ . "<br>";
    echo "Isi x = " . $x . "<br>";
    echo ("<br>");
    echo "Isi --y = " . --$y . "<br>";
    echo "Isi y-- = " . $y-- . "<br>";
    echo "Isi y = " . $y . "<br>";
    echo ("<br>");

    //Conditional assignment operators
    $user = "Andi darmawan";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "ada isi";
    echo $status . "<br>";
    // variable $colos diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
    ?>
</body>

</html>