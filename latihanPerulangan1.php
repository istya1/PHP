<!DOCTYPE html>
<html>
    <head>
        <title>Pattern Display</title>
    </head>
    <body>
        <pre>

    <?php

    for ($i = 1; $i <= 7; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    ?>

        </pre>
    </body>
</html>