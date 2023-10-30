<?php

$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];

// Menampilkan tabungan
echo "Uang yang terdapat di tabungan saya adalah ";
for($i=0; $i < count($tabungan); $i++){
  echo $tabungan[$i].", ";
}
echo "<br>";

// Menjumlahkan semua tabungan
echo "Jumlah tabungan saya adalah " . array_sum($tabungan) . "<br>";

// Mencari pecahan tabungan
echo "Didalam tabungan saya terdapat pecahan " .implode(', ', array_unique($tabungan)) . "<br>";

// Mencari uang terkecil
echo "Pecahan uang terkecil adalah " . min($tabungan) . "<br>";

// Mencari uang terbesar
echo "Pecahan uang terbesar adalah " . max($tabungan) . "<br>";

// Urutan dari terkecil
asort($tabungan);
$min = implode(', ', $tabungan);
echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah " . $min . "<br>";

// Urutan dari terbesar
arsort($tabungan);
$max = implode(', ', $tabungan);
echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah " . $max . "<br>";

// Mengganti pecahan 50.000 ke 100.000
array_splice($tabungan, 0, 2, 100000);
$splice = implode(', ', $tabungan);
echo "Saya ingin mengganti pecahan 50000 yang ada di tabungan menjadi 100000, maka uang yang berada di tabungan menjadi " . $splice . "<br>";

// Menambah 20000 pada tabungan
array_push($tabungan, 20000);
$add = implode(", ", $tabungan);
echo "Hari ini saya menabung sebesar 20000, maka kini uang yang berada di tabungan saya adalah " . $add . "<br>";

// Diurutkan dari yang terkecil
asort($tabungan);
$sort = implode(", ", $tabungan);
echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah " . $sort . "<br>";

// Jumlah tabungan
echo "Maka jumlah tabungan saya saat ini adalah " . array_sum($tabungan);