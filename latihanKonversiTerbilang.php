<!DOCTYPE html>
<html>
    <head>
        <title>Konversi Angka ke Terbilang</title>
    </head>
    <body>
        <h1>Konversi Angka ke Terbilang</h1>
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

        function convert_to_letter_grade($angka)
        {
            switch ($angka) {
                case 0:
                    return "nol";
                    break;
                case 1:
                    return "satu";
                    break;
                case 2:
                    return "dua";
                    break;
                case 3:
                    return "tiga";
                    break;
                case 4:
                    return "empat";
                    break;
                case 5:
                    return "lima";
                    break;
                case 6:
                    return "enam";
                    break;
                case 7:
                    return "tujuh";
                    break;
                case 8:
                    return "delapan";
                    break;
                case 9:
                    return "sembilan";
                    break;
                default:
                    return "Angka diluar rentang 0-9";
            }
        }

        ?>

    </body>
</html>