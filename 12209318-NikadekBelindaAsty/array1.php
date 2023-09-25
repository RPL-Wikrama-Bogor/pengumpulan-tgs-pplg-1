<?php
$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];
$semua = implode(", ", $tabungan);
echo "Uang yang terdapat di tabungan saya adalah <b>" . $semua . "</b><br>";

$jumlah = array_sum($tabungan);
echo "jumlah tabungan saya adalah  <b>" . $jumlah . "</b><br>";

$uang = array_unique($tabungan);
echo "Didalam tabungan saya terdapat uang pecahan  <b> " . implode(", ", $uang) . "</b><br>";

$terkecil = min($tabungan);
$terbesar = max($tabungan);
echo "Pecahan uang terkecil adalah <b>" . $terkecil . "</b><br>";
echo "Pecahan uang terbesar adalah <b>" . $terbesar . "</b><br>";

asort($tabungan);
echo "jika diurutkan dari yang terkecil maka uang yang berada ditabungan adalah <b>" . implode(", ", $tabungan) . "</b><br>";

arsort($tabungan);
echo "jika diurutkan dari yang terbesar maka uang yang berada ditabungan adalah <b>" . implode(", ", $tabungan) . "</b><br>";

$tabungan[1] = 100000;
unset($tabungan[6]);
echo "saya ingin mengganti pecahan <b>50000</b> yang ada ditabungan menjadi <b>100000</b> maka, uang yang berada ditabungan menjadi <b>" . implode(", ", $tabungan) . "</b><br>";

array_push($tabungan, 20000);
echo "hari ini saya menabung sebesar <b>20000</b>, maka kini uang yang berada di tabungan saya adalah <b>" . implode(", ", $tabungan) . "</b><br>";

asort($tabungan);
echo "jika diurutkan dari yang terkecil kini tabungan saya adalah  <b>" . implode(", ", $tabungan) . "</b><br>";

$jumlah = array_sum($tabungan);
echo "maka jumlah tabungan saya saat ini adalah <b>" . $jumlah . "</b><br>";



?>