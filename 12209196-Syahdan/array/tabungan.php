<?php
$tabungan= [10000,50000,10000,5000,20000,5000,50000,20000];
$pecahantabungan = implode( "," ,$tabungan);
$totaltabungan = array_sum($tabungan);
$jenisuang = implode (",", array_unique($tabungan));
$min = min($tabungan);
$max = max($tabungan);
asort($tabungan);
$urutanterkecil = implode(" ", $tabungan);
arsort($tabungan);
$urutanterbesar = implode(" ", $tabungan);
array_splice($tabungan, 0, 2, 100000);
$splice = implode(', ', $tabungan);
array_push($tabungan, 20000);
$add = implode(', ', $tabungan);
asort($tabungan);
$urutakhir = implode(', ', $tabungan);
$sum = number_format(array_sum($tabungan), 2, ',', '.');



    echo "uang yang ada di tabungan saya yaitu = <b>$pecahantabungan</b> </br>";
    echo "jumlah keseluruhan tabungan saya yaitu = <b>$totaltabungan</b> </br>";
    echo "dalam tabungan terdapat jenis beberapa jenis pecahan yaitu = <b>$jenisuang</b> </br>";
    echo "pecahan uang terkecil adalah = <b>$min</b> </br>";
    echo "pecahan uang terbesar adalah = <b>$max</b> </br>";
    echo "jika diurutkan dari yang terkecil ke terbesar maka uang yang ada di tabungan adalah = <b>$urutanterkecil</b> </br>";
    echo "jika diurutkan dari yang terbesar ke terkecil maka uang yang ada di tabungan adalah = <b>$urutanterbesar</b> </br>";
    echo "Gabungkan pecahan <b>50000</b> dua menjadi pecahan <b>100000</b> = <strong>$splice</strong> ","<br>";
    echo "Tambah uang <b>20000</b> kedalam tabungan = <b>$add</b> ","<br>";
    echo "Total jumlah tabungan sekarang = <b>Rp$sum</b>","<br>";
?>