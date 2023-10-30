<?php

$nilai = [80,78,72,84,92,88];

$nilai2 = $nilai;

$nilaiString = implode(',',$nilai);
echo "Nilai Saya: ".$nilaiString. "<br>";


$nilaiMax =max($nilai);
echo "Nilai Terbesar : ".$nilaiMax . "<br>";

$nilaiMin = min($nilai);
echo "Nilai Terkecil : ".$nilaiMin . "<br>";

sort($nilai2);
echo "Urutan dari yang terkecil: ".implode(',',$nilai2)."<br>";

rsort($nilai2);
echo "Urutan dari yang terbesar: ".implode(',',$nilai2)."<br>";



$rata= array_sum($nilai)/ count($nilai);
$bulat = round($rata);
echo "Nilai Rata : ".$bulat . "<br>";



$key = array_search(72,$nilai);
if ($key !== false ){
    $nilai[$key] = 75;
    echo "Saya melakukan perbaikan untuk nilai ".$nilaiMin . " Saya mendapat nilai : ".$nilai[$key]." Jadi Nilai Saya Sekarang ".implode(',',$nilai)."<br>";

}



rsort($nilai);
echo "Sekarang Urutan Nilai Terbesar : ".implode(',',$nilai);
?>