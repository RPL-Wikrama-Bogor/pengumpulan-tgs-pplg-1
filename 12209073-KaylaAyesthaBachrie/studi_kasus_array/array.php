<?php

    $tabungan = ["10000", "50000", "10000", "5000", "20000", "5000", "50000", "20000"];
    $tbg = implode(", ", $tabungan);
    echo "Uang yang terdapat di tabungan saya adalah " . $tbg;

    echo "<br>";
    echo 'Jumlah tabungan saya adalah ' .  array_sum($tabungan);
    
    echo "<br>";
    $pecahan = array_unique($tabungan);
    echo "Didalam tabungan saya terdapat uang pecahann " . implode(", ", $pecahan);
    
    echo "<br>";
    $max = max($tabungan);
    $min = min($tabungan);
    echo "Pecahan uang terkecil adalah " . $min;
    echo "<br />";
    echo "Pecahan uang terbesar adalah " . $max;
    
    echo "<br>";
    asort($tabungan);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah " . implode(", ", $tabungan);
    echo "<br>";
    $terbesar = arsort($tabungan);
    echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah " . implode(", ", $tabungan);
    
    echo "<br>";
    $tabungan[1] = 100000;
    unset($tabungan[6]);
    echo "Saya ingin mengganti pecahan 50000 yang ada di tabungan menjadi 100000, maka uang yang berada di tabungan menjadi " . implode(", ", $tabungan);
    
    echo "<br>";
    array_push($tabungan, 20000);
    echo "Hari ini saya menabung sebesar 20000, maka kini uang yang berada di tabungan saya adalah " . implode(", ", $tabungan);
    
    echo "<br>";
    asort($tabungan);
    echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah " . implode(", ", $tabungan);
    
    echo "<br>";
    echo 'Maka jumlah tabungan saya saat ini adalah ' .  array_sum($tabungan);
    
    ?>