<?php

$items = [

    [
        'barang' => 'Terigu',
        'harga' => '12000',
        'diskon' => 'y'
    ],
    [
        'barang' => 'Beras',
        'harga' => '8000',
        'diskon' => 'n'
    ],
    [
        'barang' => 'Kacang',
        'harga' => '18000',
        'diskon' => 'y'
    ],
    [
        'barang' => 'Mie',
        'harga' => '5000',
        'diskon' => 'n'
    ],
    [
        'barang' => 'Telur',
        'harga' => '20000',
        'diskon' => 'y'
    ],

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="">Cari Berdasarkan Barang : </label>
                <input type="text" name="barang">
                <input type="submit" name="submit">
            </li>
            <li><button type="submit" name="submits">Cari Yang Sedang Diskon</button></li>
        </ul>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $cari = $_POST['barang'];
        $hasilPencarian = [];

        foreach ($items as $item) {
            if (stripos($item['barang'], $cari) !== false) {
                $hasilPencarian[] = $item;
            }
        }
    }
    if (isset($hasilPencarian) && count($hasilPencarian) > 0) {
        foreach ($hasilPencarian as $hasil) {

            echo "Barang : " . $hasil['barang'] . " ";
            echo "Harga : " . $hasil['harga'];
            echo "<br>";
        }
    } elseif (isset($_POST['submit'])) {
        echo "<li>Tidak ada hasil yang ditemukan.</li>";
    }


    if (isset($_POST['submits'])) {
        for ($i = 0; $i < count($items); $i++) {
            if ($items[$i]['diskon'] === 'y') {
                echo "<ul><li>" . $items[$i]['barang'] . " : " . $items[$i]['harga']  . "</li></ul>";
            }
        }
    }
    ?>

</body>

</html>