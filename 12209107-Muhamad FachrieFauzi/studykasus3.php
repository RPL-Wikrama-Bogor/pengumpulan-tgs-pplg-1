<!DOCTYPE html>
<html>

<head>
    <title>Array</title>
</head>

<body>
    <?php
    $listFilm = [
        [
            "judul" => "Fast And Furious 9",
            "min-usia" => 14,
            "harga" => 45000
        ],
        [
            "judul" => "sleep call",
            "min-usia" => 16,
            "harga" => 35000
        ],
        [
            "judul" => "The nun II",
            "min-usia" => 12,
            "harga" => 35000
        ],        
        [
            "judul" => "avatar endang",
            "min-usia" => 11,
            "harga" => 0
        ],
    ];

    if (isset($_POST['simpan'])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];

        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if ($usia > $minUsia) {
            echo "<h2 style='color: green'>silahkan untuk membayar tiket film sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
        } else {
            echo "<h2 style='color: red'>Usia belum cukup</h2>";
        }
    }
    ?>

    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Usia</td>
                    <td><input type="number" name="usia"></td>
                </tr>
                <tr>
                    <td>Film</td>
                    <td>
                        <select name="judul">
                            <option hidden>--pilih film--</option>
                            <?php
                            foreach ($listFilm as $key => $film) {
                            ?>
                                <option value="<?= $key ?>"><?= $film['judul'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html><?php
$produc = [
    ['barang' => 'pasta gigi',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
    ['barang' => 'odol',
     'status' => 'non',
     'harga' => "10.000"
    ],
    ['barang' => 'inomie',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
    ['barang' => 'jancow',
     'status' => 'non',
     'harga' => "10.000"
    ],
    ['barang' => 'teh arik',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
]
echo '<h1>Semua Produk:</h1>';
echo '<ul>';
foreach ($produc as $produk) {
    echo '<li>';
    echo  $produk['barang'] .  ' = ' . $produk['harga'] . '<br>';
    echo '</li>';
}
echo '</ul>';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Produk Diskon</title>
</head>
<body>
    <h1>Pencarian Produk Diskon</h1>

    <!-- Formulir untuk pencarian -->
    <form method="post" action="">
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="diskon">Diskon</option>
        </select>
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" placeholder="ketik nama barang yg tertera">
        <input type="submit" name="cari" value="Cari">
    </form> 
    <?php
    $hasilPencarian = [];

    if (isset($_POST['cari']) && !empty($_POST['nama_barang'])) {
        $cariStatus = $_POST['status'];
        $namaBarang = $_POST['nama_barang'];

        foreach ($produc as $produk) {
            if ($produk['status'] == $cariStatus && stristr($produk['barang'], $namaBarang) !== false) {
                $hasilPencarian[] = $produk;
            }
        }
    }

    if (!empty($hasilPencarian)): ?>
        <h2>Hasil Pencarian:</h2>
        <ul>
            <?php foreach ($hasilPencarian as $produk): ?>
                <li><?= $produk['barang'] ?> = Harga: <?= $produk['harga'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($_POST['cari']) && empty($_POST['nama_barang'])): ?>
        <p>Silakan masukkan nama barang yang ingin Anda cari.</p>
    <?php else: ?>
        <p>Tidak ada produk yang sesuai dengan pencarian Anda.</p>
    <?php endif; ?>
</body>
</html>