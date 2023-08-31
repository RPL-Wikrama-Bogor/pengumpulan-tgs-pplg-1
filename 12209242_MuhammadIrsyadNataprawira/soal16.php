<title>Soal 16 - Ganjil Genap from 1 - 50</title>

<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 != 1) {
        echo $i . ' Genap <br/>';
    } else {
        echo $i . ' Ganjil <br/>';
    }
}