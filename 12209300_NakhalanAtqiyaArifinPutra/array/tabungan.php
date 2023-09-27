<?php
$tabungan =array(100000,1000,30000,200000,200000,100000,400000);

function tabungan(){
    global $tabungan;
    foreach($tabungan as $uang){
        echo "Rp.$uang,";
    }
}
function tambah(){
    global $tabungan;
    $tambah= array_sum($tabungan);
    echo $tambah;
}
function pecahan(){
    global $tabungan;
    $pecahan= array_unique($tabungan);
    foreach($pecahan as $duit){
        echo "Rp.$duit,";
    }
}
function kecil(){
    global $tabungan;
    $kecik= min($tabungan);
    echo "Rp.$kecik";
}
function besar(){
    global $tabungan;
    $beusar =max($tabungan);
    echo "Rp.$beusar";
}
function urt_kecil(){
    global $tabungan;
    asort($tabungan);
    foreach($tabungan as $kecil){
    echo "Rp.$kecil";
    }
}
function urt_besar(){
    global $tabungan;
   arsort($tabungan);
   foreach($tabungan as $besar){
    echo "Rp.$besar,";
   }
}
function ganti(){
    global $tabungan;
    $ganti = array_slice($tabungan,3,4,400000);
    foreach($tabungan as $ganti){
        echo "Rp.$ganti,";
    }
}
function nabung(){
    global $tabungan;
    array_unshift($tabungan,500000);
    foreach ($tabungan as $nabung){
        echo "Rp.$nabung,";
    }
}
function urt_kecil2(){
    global $tabungan;
    array_unshift($tabungan,500000);
    asort($tabungan);
    foreach($tabungan as $kecil){
    echo "Rp.$kecil";
    }
}
function jumlah(){
    global $tabungan;
    array_unshift($tabungan,500000);
    asort($tabungan);
   $tambah= array_sum($tabungan);
    echo "Rp.$tambah";
}
echo "</br>";
echo "Uang saya di tabungan adalah:"; tabungan();
echo "</br>";
echo "Saya menjumlahkan uang tabungan saya menjadi:Rp."; tambah();
echo "</br>";
echo "Di tabungan saya ada uang:"; pecahan();
echo "</br>";
echo "Uang saya paling terkecil:"; kecil();
echo "</br>";
echo "Uang saya paling besar:"; besar();
echo "</br>";
echo "Jika saya mengurutkan uang saya danri yang terkecil:"; urt_kecil();
echo "</br>";
echo "Jika saya mengurutkan uang saya dari yang terbesar:"; urt_besar();
echo "</br>";
echo "Saya mengganti Rp.200000 yang ada ditabungan saya menjadi Rp.400000,maka uang saya sekarang:"; ganti();
echo "</br>";
echo "Saya menabung Rp.500000 kedalam tabungan saya, jadi tabungan saya sekarang:";nabung();
echo "</br>";
echo "Jika diurutkan dari yang terkecil sekarang uang saya:"; urt_kecil2();
echo "</br>";
echo "Maka uang saya sekarang:";jumlah();
?>
