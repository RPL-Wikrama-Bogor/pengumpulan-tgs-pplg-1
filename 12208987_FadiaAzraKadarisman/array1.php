<?php
    $tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];
    $uang = implode(", ",$tabungan);
    $jumlah = array_sum($tabungan);
    $min = min($tabungan);
    $max = max($tabungan);
    
    
	echo  "Uang yang terdapat di tabungan saya adalah <b>". $uang ."</b> </br>";
    echo "Jumlah tabungan saya adalah <b>".$jumlah ."</b> </br>";

    $pecahan = array_unique($tabungan);
    echo "Didalam tabungan saya terdapat uang pecahan  <b>".implode(", ",$pecahan) . "</b></br>";

    // min & max
    echo "Pecahan uang terkecil adalah <b>". $min."</b> </br>";
    echo "Pecahan uang terbesar adalah <b>". $max."</b> </br>";

    // mengurut daru terkecil
    asort($tabungan);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah <b>". implode(", ",$tabungan)."</b> </br>";

    //mengurut dari terbesar
    arsort($tabungan);
    echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah <b>". implode(", ",$tabungan)."</b> </br>";

    // mengganti isi array
    $tabungan[1] = 100000;
    unset($tabungan[6]);
    echo "Saya ingin mengganti <b>500000</b> yang ada ditabungan menjadi <b>100000</b>, Maka uang yang berada di tabungan menjadi <b>".implode(", ",$tabungan)."</b> </br>";

    // Menambahkan
    array_push ($tabungan, '20000');
    echo "Hari ini saya menabung <b>20000</b>, maka kini uang yang berada di tabungan saya adalah <b>". implode(", ",$tabungan)."</b> </br>";

    // mengurutkan dari yang terkecil
    asort($tabungan);
    echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah <b>". implode(", ",$tabungan)."</b> </br>";

    //menjumlahkan
    $semua = array_sum($tabungan);
    echo "Maka jumlah tabungan saya saat ini adalah <b>". $semua. "</b> </br>";