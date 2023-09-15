<?php
$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];
$totabungan = array_sum($tabungan);
$destabungan = implode(" , ", $tabungan);
$urtabungan = implode(" ",array_unique($tabungan));
$max = max($tabungan);
$min = min($tabungan);
asort($tabungan);
$terkecil = implode(" ",$tabungan);
arsort($tabungan);
$terbesar = implode(" ",$tabungan);
array_splice($tabungan, 0, 2, 100000);
$splice = implode(', ', $tabungan);
array_push($tabungan, 20000);
$add = implode(', ', $tabungan);
sort($tabungan);
$hasilAkhir = implode(', ', $tabungan);
$totalAkhir = 0;
foreach ($tabungan as $tabung) {
    $totalAkhir += $tabung;
}

echo "Uang yang terdapat dalam tabungan saya adalah <b> $destabungan </b> </br>" ;
echo "Jumlah tabungan saya adalah <b> $totabungan </b> </br>";
echo "Didalam tabungan saya terdapat uang pecahan <b>$urtabungan</b> </br> ";
echo "Pecahan uang terkecil adalah <b>$min</b> </br> ";
echo "Pecahan uang terbesar adalah <b>$max</b> </br> ";
echo "Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah <b>$terkecil</b> </br> ";
echo "Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah <b>$terbesar</b> </br> ";
echo "Gabungkan pecahan 50000 dua menjadi pecahan 100000: <strong>$splice</strong> ","<br>";
echo "Tambah uang 20000 kedalam tabungan: <strong>$add</strong> ","<br>";n 
echo "<br>Jika diurutkan dari yang terkecil kini tabungan saya adalah $hasilAkhir";
echo "<br>Jumlah tabungan saya adalah $totalAkhir";

?>