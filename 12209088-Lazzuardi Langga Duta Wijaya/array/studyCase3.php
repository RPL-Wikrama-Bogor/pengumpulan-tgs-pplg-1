<?php

$barangs = [
    [
        "nama" => "Pasta gigi",
        "harga" => 20000,
        "tipe" => "diskon"
    ],
    [
        "nama" => "Minyak goreng",
        "harga" => 40000,
        "tipe" => "diskon"
    ],
    [
        "nama" => "Keripik singkong",
        "harga" => 15000,
        "tipe" => "diskon"
    ],
    [
        "nama" => "Susu",
        "harga" => 5000,
        "tipe" => "non-diskon"
    ],
    [
        "nama" => "Biskuit",
        "harga" => 7000,
        "tipe" => "non-diskon"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>opsi 1: jika di klik menampilkan data yang sedang diskon</p>
    <p>opsi 2: menampilkan data dari barang yang dicari</p>

    <ul>
        <li>
            <form method="post">
                <button type="submit" name="tampil">Cari yang sedang diskon</button>
            </form>
            <?php
            if (isset($_POST["tampil"])) {

                foreach ($barangs as $barang) {
                    if ($barang["tipe"] == "diskon") {
                        echo "</br>";
                        echo "Nama: " . $barang["nama"] . "<br>";
                        echo "Harga: " . $barang["harga"] . "<br>";
                        echo "<br>";
                    }
                }
            }
            ?>
        </li>
        <br>
        <li>
            <form method="post">
                <label for="namabrg">Nama Barang:</label>
                <input type="text" id="nama_barang" name="namabrg">
                <input type="submit" value="Cari">
            </form>
            <?php

            if (isset($_POST['namabrg'])) {
                $caribrg = $_POST['namabrg'];

                $index = array_search($caribrg, array_column($barangs, 'nama'));

                if ($index !== false && $barangs[$index]['tipe'] == 'diskon') {
                    $barang = $barangs[$index];
                    echo "<p>Nama: " . $barang['nama'] . "</p>";
                    echo "<p>Harga: " . $barang['harga'] . "</p>";
                    echo "<p>Tipe: " . $barang['tipe'] . "</p>";
                } elseif ($index !== false && $barangs[$index]['tipe'] == 'non-diskon') {
                    echo "Barang dengan nama '$caribrg' tidak diskon.";
                } else {
                    echo "Barang dengan nama '$caribrg' tidak sesuai.";
                }
            }

            ?>
        </li>
    </ul>

</body>

</html>