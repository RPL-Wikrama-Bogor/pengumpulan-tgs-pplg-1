<?php 

    // Menampilkan nilai
    $uang = array(10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000);
    echo "Uang yang terdapat di tabungan saya adalah " . "<b>" . implode(", ",$uang) . "</b>";
    echo "<br>";

    // Menjumlahkan nilai
    $total_uang = array_sum($uang);
    echo "Jumlah tabungan saya adalah " . "<b>" . $total_uang . "</b>";
    echo "<br>";

    // Menampilkan Pecahan
    $pecahan = array_unique($uang);
    echo "Di dalam tabungan saya terdapat uang pecahan " . "<b>" . implode(", ", $pecahan) ."</b>";
    echo "<br>";

    // Mencari nilai terkecil
    $min = min($uang);
    echo "Pecahan terkecil adalah " . "<b>" . $min . "</b>";
    echo "<br>";

    // Mencari nilai terbesar
    $max = max($uang);
    echo "Pecahan terbesar adalah " . "<b>" . $max . "</b>";
    echo "<br>";

    // Urutan dari yang terkecil
    asort($uang);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah  ";
    echo "<b>" . implode(", ", $uang) . "</b>";
    echo "<br>";
    
    // Urutan dari yang terbesar
    arsort($uang);
    echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah  ";
    echo "<b>" . implode(", ", $uang) . "</b>";
    echo "<br>";
    
    
    // Mengganti nilai
    $uang = array(10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000);
    echo "Saya ingin mengganti pecahan  <b>"  . $uang[1] . "</b> yang ada di tabungan menjadi ";
    $uang[1] = 100000;
    unset($uang[6]);
    echo "<b>" . $uang[1] . "</b>" . ", maka uang yang berada di tabungan menjadi ";
    echo "<b>" . implode(", ", $uang) . "</b>";
    echo "<br>";


    // Menambahkan Tabungan
    array_push($uang, 20000);
    echo "Hari ini saya menabung sebesar " . "<b>" . $uang[7] . "</b>" . ", maka kini uang yang berada di tabungan saya adalah adalah <b>" . implode(", ", $uang) . "</b>";
    echo "<br>";


    // Mengurutkan dari yang terkecil 
    asort($uang);
    echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah  ";
    echo "<b>" . implode(", ", $uang) . "</b>";
    echo "<br>";

    // Menjumlahkan nilai
    $total_akhir = array_sum($uang);
    echo "Maka jumlah tabungan saya saat ini adalah " . "<b>" . $total_akhir . "</b>";
?>