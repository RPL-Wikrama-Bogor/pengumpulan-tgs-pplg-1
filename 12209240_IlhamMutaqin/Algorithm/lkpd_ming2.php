<?php

$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];
$imp_tab = implode(', ', $tabungan);
$total_tab = number_format(array_sum($tabungan), 2, ',', '.');
$duplikat_tab = array_unique($tabungan);
$pecahan = implode(', ', $duplikat_tab);
$min_tab = min($tabungan);
$max_tab = max($tabungan);
asort($tabungan);
$min = implode(', ', $tabungan);
arsort($tabungan);
$max = implode(', ', $tabungan);
array_splice($tabungan, 0, 2, 100000);
$splice = implode(', ', $tabungan);
array_push($tabungan, 20000);
$add = implode(', ', $tabungan);
asort($tabungan);
$urutakhir = implode(', ', $tabungan);
$sum = number_format(array_sum($tabungan), 2, ',', '.');

echo "Uang yang ada dalam tabungan: <strong>$imp_tab</strong> " ,"<br>";
echo "Semua pecahan dalam tabungan: <strong>$pecahan</strong> ","<br>";
echo "Jumlah tabungan: <strong>Rp$total_tab</strong> ","<br>";
echo "Uang terkecil: <strong>$min_tab</strong> ","<br>";
echo "Uang terbesar: <strong>$max_tab</strong> ","<br>";
echo "Pecahan dari terkecil: <strong>$min</strong> ","<br>";
echo "Pecahan dari terbesar: <strong>$max</strong> ","<br>";
echo "Gabungkan pecahan 50000 dua menjadi pecahan 100000: <strong>$splice</strong> ","<br>";
echo "Tambah uang 20000 kedalam tabungan: <strong>$add</strong> ","<br>";
echo "Total jumlah tabungan sekarang: <strong>Rp$sum</strong>","<br>";
?>