<?php

$value = [10000, 5000, 5000, 50000, 10000, 20000, 100000, 50000];

//Baris 1

$showValue = implode(", ", $value);
echo "Uang yang terdapat ditabungan saya adalah <b>" . $showValue . "</b> <br>";

//Baris 2

echo "Jumlah tabungan saya adalah <b>" . array_sum($value) . "</b> <br>";

//baris 3

echo "Pecahan uang terkecil adalah <b>" . min($value) . "</b> <br>";

//baris 4

echo "Pecahan uang terbesar adalah <b>" . max($value) . "</b> <br>";

//baris 5

asort($value);
$minToMax = implode(", ", $value);
echo "Jika diurutkan dari yang terkecil adalah <b>" . $minToMax  . "</b> <br>";

//baris 6 

arsort($value);
$maxToMin = implode(", ", $value);
echo "Jika diurutkan dari yang terbesar adalah <b>" . $maxToMin . "</b> <br>";

//baris 7

array_splice($value, 1, 1, 100000);
$splice = implode(", ", $value);
echo "Saya ingin mengganti pecahan <b>50000</b> yang ada ditabungan menjadi <b>100000</b>, maka uang yang ada ditabungan menjadi <b>" .
    $splice . "</b> <br>";

//baris 8

array_push($value, 20000);
$push = implode(", ", $value);
echo "Saya akan menabung hari ini sebesar <b>20000</b>, maka kini uang ditabungan saya menjadi <b>" . $push . "</b> <br>";

//baris 9

asort($value);
$minToMax = implode(", ", $value);
echo "Jika diurutkan dari yang terkecil adalah <b>" . $minToMax  . "</b> <br>";

//baris 10

echo "Jumlah tabungan saya saat ini adalah <b>" . array_sum($value) . "</b> <br>";