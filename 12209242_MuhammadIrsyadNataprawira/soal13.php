<title>Soal 14 - Loop from 1 - 50</title>

<?php
    $i = 1;

    while ($i <= 50) {
        echo $i . "While <br/>";

        $i++;
    }

    echo "<br/>";

    for ($i = 1; $i <= 50; $i++) {
        echo $i . " For <br/>";
    }
?>