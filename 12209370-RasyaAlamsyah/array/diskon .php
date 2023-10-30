<?php
$produc = [
    ['barang' => 'pasta gigi',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
    ['barang' => 'milo',
     'status' => 'non-diskon',
     'harga' => "10.000"
    ],
    ['barang' => 'gaga',
     'status' => 'diskon',
     'harga' => "5.000"
    ],
    ['barang' => 'indomilk',
     'status' => 'non-diskon',
     'harga' => "5.000"
    ],
    ['barang' => 'terigu',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
];

// Fungsi pencarian produk dengan status 'diskon'
function cariProdukDiskon($arrayProduk) {
    $produkDiskon = [];
    foreach ($arrayProduk as $produk) {
        if ($produk['status'] == 'diskon') {
            $produkDiskon[] = $produk;
        }
    }
    return $produkDiskon;
}

// Pencarian produk dengan status 'diskon' berdasarkan input pengguna
$hasilPencarian = [];
if (isset($_POST['cari'])) {
    $cariStatus = $_POST['status'];
    if ($cariStatus == 'diskon') {
        $hasilPencarian = cariProdukDiskon($produc);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Produk Diskon</title>
</head>
<body>
     <h2>Produk diskon</h2>

    <!-- Formulir untuk pencarian -->
    <form method="post" action="">
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="diskon">Diskon</option>
        </select>
        <input type="submit" name="cari" value="Cari">
    </form>

    <!-- Hasil pencarian -->
    <?php if (!empty($hasilPencarian)): ?>
        <h1>Hasil Pencarian:</h3>
        <ul>
            <?php foreach ($hasilPencarian as $produk): ?>
                <li><?= $produk['barang'] ?> = Harga: <?= $produk['harga'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada produk dengan status 'diskon' yang ditemukan.</p>
    <?php endif; ?>
</body>
</html>