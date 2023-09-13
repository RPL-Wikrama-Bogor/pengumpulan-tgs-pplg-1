<?php
    //uang yang ada
    $uangtabungan = ["10000", "50000", "10000", "5000", "20000", "5000","50000", "20000"];
    echo "Uang yang terdapat didalam tabungan " . "<b>" . implode(", ",$uangtabungan) . "</b>" ;
    echo "<br>" ;

    //total jumlah yang atas
    $total = array_sum($uangtabungan);
    echo "Jumlah tabungan saya adalah " . "<b>" . $total . "</b>" ;
    echo "<br>";

    //uang dalam tabungan
    $dalam = ["10000", "50000", "5000", "20000",];
    echo "Didalam tabungan saya terdapat uang pecahan " . "<b>" . implode(", ",$dalam) . "</b>" ;
    echo "<br>" ;

    //pecahan uang terkecil
    $kecil = min($uangtabungan);
    echo "Pecahan uang terkecil adalah " . "<b>" . $kecil . "</b>" ;
    echo "<br>";
    
    //pecahan uang besar
    $besar = max($uangtabungan);
    echo "Pecahan uang terbesar adalah " . "<b>" . $besar . "</b>" ;
    echo "<br>";

    //urutkan dari yang terkecil
    asort($uangtabungan);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah " . "<b>" . implode(", ",$uangtabungan) . "</b>" ;
    echo "<br>" ;

    //urutkan dari yang terbesar
    arsort($uangtabungan);
    echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah " . "<b>" . implode(", ",$uangtabungan) . "</b>" ;
    echo "<br>" ;

    //mengganti pecahan
    //mengganti pecahan tabungan
    $tb=array(10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000);
    $ganti =array(10000, 100000, 10000, 5000, 20000, 5000, 20000);
    array_splice($tb,1,6,$ganti);
    echo "Saya ingin mengganti pecahan " .  "<b>" . $uangtabungan[6] . "</b>" . " yang ada ditabungan menjadi " . "<b>" . "100000 ". "</b>" . " maka uang yang ditabung menjadi " . "<b>" . implode(', ',$ganti) . "</b> <br>";

    //menambah 1 data
    array_push ($ganti, 20000);
    echo "Hari ini saya menabung sebesar " . "<b>" . $uangtabungan[4] . "</b>" . ", maka kini uang yang berada di tabungan saya adalah " . "<b>" . implode(', ', $ganti) . "</b> <br>";

    //mengurutkan dari terkecil sampai terbesar
    sort($ganti);
    echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah " .  "<b>" . implode(', ', $ganti) . "</b>" . "<br>";

    //jumlah
    echo "Maka jumlah tabungan saya saat ini adalah " . "<b>" . array_sum($ganti) . "</b>" ;
    