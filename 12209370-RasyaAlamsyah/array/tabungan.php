<?php
// Mendefinisikan array tabungan
$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];

// Menghitung saldo awal dan memformatnya
$initialBalance = number_format(array_sum($tabungan), 2, ',', '.');

// Mencari dan memformat nilai-nilai unik dalam array
$distinctPecahan = implode(', ', array_unique($tabungan));

// Mencari dan memformat nilai terkecil dan terbesar dalam array
$minUang = min($tabungan);
$maxUang = max($tabungan);

// Mengurutkan array secara ascending dengan mempertahankan kunci
asort($tabungan);
$sortedMinToMax = implode(', ', $tabungan);

// Mengurutkan array secara descending dengan mempertahankan kunci
arsort($tabungan);
$sortedMaxToMin = implode(', ', $tabungan);

// Menghapus dua elemen pertama dan menggantinya dengan 100000
array_splice($tabungan, 0, 2, 100000);
$splicedAndAdded = implode(', ', $tabungan);

// Menambahkan nilai 20000 ke akhir array
array_push($tabungan, 20000);
$addedValue = implode(', ', $tabungan);

// Menghitung saldo akhir dan memformatnya
$finalTotal = number_format(array_sum($tabungan), 2, ',', '.');

// Menampilkan hasil
echo "Uang yang ada dalam tabungan: <strong>$initialBalance</strong><br>";
echo "Semua pecahan dalam tabungan: <strong>$distinctPecahan</strong><br>";
echo "Jumlah tabungan: <strong>Rp$initialBalance</strong><br>";
echo "Uang terkecil: <strong>$minUang</strong><br>";
echo "Uang terbesar: <strong>$maxUang</strong><br>";
echo "Pecahan dari terkecil: <strong>$sortedMinToMax</strong><br>";
echo "Pecahan dari terbesar: <strong>$sortedMaxToMin</strong><br>";
echo "Gabungkan pecahan 50000 dua menjadi pecahan 100000: <strong>$splicedAndAdded</strong><br>";
echo "Tambah uang 20000 kedalam tabungan: <strong>$addedValue</strong><br>";
echo "Total jumlah tabungan sekarang: <strong>Rp$finalTotal</strong><br>";
?>
