<?php

$tabungan = ["10000", "50000", "10000", "5000", "20000", "5000", "50000", "20000"];
$tabungan1 = implode(", ", $tabungan);
echo "Uang yang terdapat di tabungan saya adalah " . "<b>" . $tabungan1 . "</b>";

echo "<br>";
echo "Jumlah tabungan saya adalah " . "<b>" . array_sum($tabungan) . "</b>";

echo "<br>";
$pecahan = array_unique($tabungan);
echo "Didalam tabungan saya terdapat uang pecahann " . "<b>" . implode(", ", $pecahan) . "</b>";

echo "<br>";
$max = max($tabungan);
$min = min($tabungan);
echo "Pecahan uang terkecil adalah " . "<b>" . $min . "</b>";
echo "<br />";
echo "Pecahan uang terbesar adalah " . "<b>" . $max . "</b>";

echo "<br>";
asort($tabungan);
echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah " . "<b>" . implode(", ", $tabungan) . "</b>";
echo "<br>";
$terbesar = arsort($tabungan);
echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah " . "<b>" . implode(", ", $tabungan) . "</b>";

echo "<br>";
$tabungan[1] = 100000;
unset($tabungan[6]);
echo "Saya ingin mengganti pecahan <b>50000</b> yang ada di tabungan menjadi <b>100000</b>, maka uang yang berada di tabungan menjadi " . "<b>" . implode(", ", $tabungan) . "</b>";

echo "<br>";
array_push($tabungan, 20000);
echo "Hari ini saya menabung sebesar <b>20000</b>, maka kini uang yang berada di tabungan saya adalah " . "<b>" . implode(", ", $tabungan) . "</b>";

echo "<br>";
asort($tabungan);
echo "Jika diurutkan dari yang terkecil kini tabungan saya adalah " . "<b>" . implode(", ", $tabungan) . "</b>";

echo "<br>";
echo "Maka jumlah tabungan saya saat ini adalah " . "<b>" . array_sum($tabungan) . "</b>";
