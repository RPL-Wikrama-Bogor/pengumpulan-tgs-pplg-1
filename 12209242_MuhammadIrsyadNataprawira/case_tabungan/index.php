<?php

$tabungan = [10000, 20000, 5000, 50000, 30000, 15000, 10000, 1000];

function getIsiTabungan($arr) {
    return implode(', ', $arr);
}

function getJumlah($arr) {
    $result = 0;

    for ($i = 0; $i < count($arr) ; $i++) { 
        $result += $arr[$i];
    }

    return $result;
}

function getTerkecil($arr) {
    return min($arr);
}

function getTerbesar($arr) {
    return max($arr);
}

function getPecahan($arr) {
    $hasil = array_unique($arr);
    return implode(', ', $hasil);
}

function getUrutTerkecil($arr) {
    sort($arr);
    return implode(', ',$arr);
}

function getUrutTerbesar($arr) {
    arsort($arr);
    return implode(', ', $arr);
}

function getNewTabungan($arr) {
    $i = array_search(50000, $arr);

    if ($i !== false) {
        $arr[$i] = 100000;
    }

    return $arr;
}

function addMoney($arr) {
    global $tabungan;
    $arr = getNewTabungan($tabungan);
    array_push($arr, 20000);
    return $arr;
}

function newSort($arr) {
    global $tabungan;
    $arr = addMoney($tabungan);
    sort($arr);

    return $arr;
}

function endResult($arr) {
    global $tabungan;
    $result = 0;
    $arr = addMoney($tabungan);
    
    for ($i = 0; $i < count($arr); $i++) {
        $result += $arr[$i];
    }

    return $result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabungan - PHP</title>
</head>
<body>

    <p>Uang yg ada di tabungan saya adalah <strong><?= getIsiTabungan($tabungan) ?></strong></p>
    <p>Jumlah tabungan saya adalah <strong>Rp <?= number_format(getJumlah($tabungan), 2, ',', '.')  ?></strong> </p>
    <p>Didalam tabungan saya terdapat pecahan <strong> <?= getPecahan($tabungan)  ?> </strong></p>
    <p>Pecahan uang terkecil adalah <strong>Rp <?= number_format(getTerkecil($tabungan), 2, ',', '.')  ?></strong></p>
    <p>Pecahan uang terbesar adalah <strong>Rp <?= number_format(getTerbesar($tabungan), 2, ',', '.')  ?></strong></p>
    <p>Jika diurutkan dari yang terkecil maka uang yang berada di tabungan adalah <strong><?= getUrutTerkecil($tabungan)  ?></strong>  </p>
    <p>Jika diurutkan dari yang Terbesar maka uang yang berada di tabungan adalah <strong><?= getUrutTerbesar($tabungan)  ?></strong>  </p>
    <p>Saya ingin mengganti pecahan  <strong>50000</strong> yang ada di tabungan menjadi <strong>100000</strong>, maka uang yang berada di tabungan menjadi <strong><?= implode(', ', getNewTabungan($tabungan))  ?></strong></p>
    <p>Hari ini saya menabung sebesar <strong>20000</strong>, maka kini uang yang berada di tabungan saya adalah <strong><?= implode(', ',addMoney($tabungan))  ?></strong> </p>
    <p>Jika diurutkan dari yang terkecil kini tabungan saya adalah <strong><?= implode(', ', newSort($tabungan))  ?></strong>  </p>
    <p>Maka jumlah tabungan saya saat ini adalah <strong>Rp <?= number_format(endResult($tabungan), 2, ',', '.') ?></strong> </p>
</body> 
</html>