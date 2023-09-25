<?php
// menampilkan isi tabungan awal
$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];
echo "Uang yang terdapat di tabungan saya adalah " . "<b>" . implode(", ",$tabungan) . "</b>". "<br>";

// Menjumlahhkan array tabungan
echo "Jumlah tabungan saya adalah " . "<b>" . array_sum($tabungan) . "</b>" . "<br>";

// Menampilkan pecahan yang ada di array tabungan
echo "Didalam tabungan saya terdapat uang pecahan ". "<b>" . implode(", ",array_unique($tabungan)) . "</b>" . "<br>";

//pecahan uang terkecil
echo "Pecahan uang terkecil adalah " .  "<b>" . min($tabungan) . "</b>" . "<br>";

//pecahan uang terbesar
echo "Pecahan uang terbesar adalah " .  "<b>" . max($tabungan) . "</b>" . "<br>";

//urut dari kecil
sort($tabungan);
echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah " .  "<b>" . implode(', ', $tabungan) . "</b>" . "<br>";

//urut dari besar
arsort($tabungan);
echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah " .  "<b>" . implode(', ', $tabungan) . "</b>" . "<br>";

//mengganti pecahan tabungan
$tb=array(10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000);
$ganti =array(10000, 100000, 10000, 5000, 20000, 5000, 20000);
array_splice($tb,1,6,$ganti);
echo "Saya ingin mengganti pecahan " .  "<b>" . $tabungan[6] . "</b>" . " yang ada ditabungan menjadi " . "<b>" . "100000 ". "</b>" . " maka uang yang ditabung menjadi " . "<b>" . implode(', ',$ganti) . "</b> <br>";

//menambah 1 data
array_push ($ganti, 20000);
echo "Hari ini saya menabung sebesar " . "<b>" . $tabungan[4] . "</b>" . ", maka kini uang yang berada di tabungan saya adalah " . "<b>" . implode(', ', $ganti) . "</b> <br>";

//mengurutkan dari terkecil sampai terbesar
sort($ganti);
echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah " .  "<b>" . implode(', ', $ganti) . "</b>" . "<br>";

//jumlah
echo "Maka jumlah tabungan saya saat ini adalah " . "<b>" . array_sum($ganti) . "</b>" ;
?>