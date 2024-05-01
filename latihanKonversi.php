<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h1>Konversi Nilai</h1>
    <form method="post">
        <label for="numeric_grade">Masukkan jumlah nilai :</label>
        <input type="number" id="numeric_grade" name="numeric_grade" required>
        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeric_grade = $_POST["numeric_grade"];
        $letter_grade = convert_to_letter_grade($numeric_grade);
        echo "<p>Your letter grade is: $letter_grade</p>";
    }

    function convert_to_letter_grade($score) {
        if ($score >= 90 && $score <= 100) {
            return 'A';
        } elseif ($score >= 80 && $score < 90) {
            return 'AB';
        } elseif ($score >= 70 && $score < 80) {
            return 'B';
        } elseif ($score >= 60 && $score < 70) {
            return 'BC';
        } else {
            return 'C';
        }
    }
    ?>
</body>
</html>