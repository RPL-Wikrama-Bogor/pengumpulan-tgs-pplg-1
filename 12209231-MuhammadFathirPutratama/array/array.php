<?php 
$tabungan = [10000, 50000, 10000, 5000, 20000, 5000, 50000, 20000];
echo "Uang yang terdapat di tabungan saya adalah ";
echo implode(', ', $tabungan);

$totalTabungan = 0;

foreach ($tabungan as $tabung) {
    $totalTabungan += $tabung;
}
echo "<br>Jumlah tabungan saya adalah $totalTabungan";

$mengambil = array_unique($tabungan);
$pecahan = implode(', ', $mengambil);
echo "<br>Didalam tabungan saya terdapat uang pecahan $pecahan";

$uangTerbesar = max($tabungan);
$uangTerkecil = min($tabungan);
echo "<br>Pecahan uang terkecil adalah $uangTerkecil";
echo "<br>Pecahan uang terbesar adalah $uangTerbesar";

sort($tabungan);
$hasil = implode(', ', $tabungan);
echo "<br>Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah $hasil";

rsort($tabungan);
$hasil = implode(', ', $tabungan);
echo "<br>Jika diurutkan dari yang terbesar maka uang yang berada di tabungan adalah $hasil";

array_splice($tabungan, 0, 2, 100000);
$splice = implode(', ', $tabungan);
echo "<br>Saya ingin mengganti pecahan 50000 yang ditabungan menjadi 100000, maka uang yang berada di tabungan menjadi $splice";

array_push($tabungan, 20000);
$menambah = implode(', ', $tabungan);
echo "<br>Hari ini saya menabung sebesar 20000, maka kini uang yang berada di tabungan saya adalah $menambah";

sort($tabungan);
$hasilAkhir = implode(', ', $tabungan);
echo "<br>Jika diurutkan dari yang terkecil kini tabungan saya adalah $hasilAkhir";

$totalAkhir = 0;
foreach ($tabungan as $tabung) {
    $totalAkhir += $tabung;
}
echo "<br>Jumlah tabungan saya adalah $totalAkhir";
?>