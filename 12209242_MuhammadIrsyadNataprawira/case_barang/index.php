<?php

$barang = [
    [
        'nama' => 'Pepsodent',
        'harga' => 20_000,
        'tipe' => 'diskon'
    ],
    [
        'nama' => 'Silverqueen',
        'harga' => 14_000,
        'tipe' => 'non-diskon'
    ],
    [
        'nama' => 'Tepung Beras Rose Brand',
        'harga' => 24_000,
        'tipe' => 'diskon'
    ],
    [
        'nama' => 'Tupperware Emak',
        'harga' => 50_000,
        'tipe' => 'non-diskon'
    ],
    [
        'nama' => 'Semen Tiga Roda',
        'harga' => 46_000,
        'tipe' => 'diskon'
    ],
    [
        'nama' => 'Boneka Kobo Kanaeru',
        'harga' => 100_000,
        'tipe' => 'diskon'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Harga</title>
</head>
<style>
    h2 {
        text-align: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #showList {
        display: none;
    }
</style>

<body>
    <h2>Toko Serba Ada</h2>

    <div class="container">

        <ol id="showList">
            <?php foreach ($barang as $item) : ?>
                <?php if ($item['tipe'] === 'diskon') : ?>
                    <li><?= $item['nama'] ?> || Harga: Rp <?= number_format($item['harga'], 0, ',', '.') ?> </li>
                <?php endif ?>
            <?php endforeach; ?>
        </ol>

        <ul>
            <li><button id="tampilkanBarang" onclick="showTable()">Tampilkan barang yang sedang diskon</button></li>
            <li>
                <form action="" method="post">
                    Cari barang: <input type="text" name="nama" placeholder="Cari Barang..." required />
                    <input type="submit" value="Cari" name="submit">
                </form>
            </li>
        </ul>


        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $cariProduk = null;

            foreach ($barang as $item) {
                if (strcasecmp($item['nama'], $nama) === 0) {
                    $cariProduk = $item;
                }
            }
        ?>

            <?php if ($cariProduk !== null && $cariProduk['tipe'] === 'diskon') { ?>
                <ul>
                    <li><?= 'Nama: ' . $cariProduk['nama'] . ' || Harga: Rp ' . number_format($cariProduk['harga'], 0, ',', '.') . " || Tipe: " . $cariProduk['tipe']  ?></li>
                </ul>
            <?php } elseif ($cariProduk !== null && $cariProduk['tipe'] === 'non-diskon') { ?>
                <ul>
                    <li><?= $cariProduk['nama'] . ' Sedang tidak diskon.' ?></li>
                </ul>
        <?php } else {
                echo 'Barang Tidak Ditemukan.';
            }
        }
        ?>
    </div>



    <script>
        const showList = document.getElementById('showList')

        function showTable() {
            showList.style.display = 'block';
        }
    </script>
</body>

</html>