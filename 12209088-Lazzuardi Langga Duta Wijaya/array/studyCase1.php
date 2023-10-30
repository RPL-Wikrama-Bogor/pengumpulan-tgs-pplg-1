<?php

    $jmlUang = array(10000,50000,10000,5000,20000,5000,50000,20000);
    $nilai = array_unique($jmlUang);

    echo "Isi array nya adalah : ";
    foreach ($jmlUang as $uang) {
        echo "<b>" .$uang . " </b>";
    }

    echo "<br>";

    $jumlah = array_sum($jmlUang);
    echo "Jumlah tabungan saya adalah : ". "<b>$jumlah</b>";

    echo "<br>";

    echo "Didalam tabungan saya terdapat uang pecahan : ";
    foreach ($nilai as $nilaiTab) {
        echo "<b>" .$nilaiTab . " </b>";
    }

    echo "<br>";

    $min = min($jmlUang);
    echo "Pecahan uang terkecil adalah : ". "<b>$min</b>";

    echo "<br>";
    
    $max = max($jmlUang);
    echo "Pecahan uang terbesar adalah : ". "<b>$max</b>";

    echo "<br>";

    asort($jmlUang);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada ditabungan saya adalah : ";
    foreach ($jmlUang as $nilaiTerkecil) {
        echo "<b>". $nilaiTerkecil . " </b>";
    }

    echo "<br>";

    arsort($jmlUang);
    echo "Jika diurutkan dari yang terbesar maka uang yang berada ditabungan saya adalah : ";
    foreach ($jmlUang as $nilaiTerbesar) {
        echo "<b>" .$nilaiTerbesar . " </b>";
    }

    echo "<br>";
    $jmlUangRev = array(10000,50000,10000,5000,20000,5000,50000,20000);
    array_splice($jmlUangRev,1,1,100000);
    array_splice($jmlUangRev,6,1,100000);
    $juang = implode(", " , $jmlUangRev);
    echo "Saya ingin mengubah pecahan 50000 yang ada ditabungan menjadi 100000, maka uang yang berada ditabungan menjadi : " ."<b>$juang</b>";

    echo "<br>";

    array_push($jmlUangRev, 20000);
    $tambah = implode(", ", $jmlUangRev);
    echo "Hari ini saya menabung 20000, maka kini uang yang ada di tabungan saya : ". "<b>$tambah</b>";

    echo "<br>";

    asort($jmlUangRev);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada ditabungan saya adalah : ";
    foreach ($jmlUangRev as $nilaiTerkecil) {
        echo "<b>".$nilaiTerkecil . " </b>";
    }

    echo "<br>";

    $total = array_sum($jmlUangRev);
    echo "Jumlah tabungan saya saat ini adalah : ". "<b>$total</b>";


