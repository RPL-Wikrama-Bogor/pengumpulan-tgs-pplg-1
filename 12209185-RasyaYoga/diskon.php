<?php
$produc = [
    ['namaproduk' => 'pasta gigi',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
    ['namaproduk' => 'odol',
     'status' => 'non',
     'harga' => "10.000"
    ],
    ['namaproduk' => 'inomie',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
    ['namaproduk' => 'jancow',
     'status' => 'non',
     'harga' => "10.000"
    ],
    ['namaproduk' => 'teh arik',
     'status' => 'diskon',
     'harga' => "10.000"
    ],
];  
echo '<h1>Semua Produk:</h1>';
echo '<ul>';
foreach ($produc as $produk) {
    echo '<li>';
    echo  $produk['namaproduk'] .  ' = ' . $produk['harga'] . '<br>';
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
        <label for="nama_tempatg">Nama namaproduk:</label>
        <input type="text" id="nama_tempatg" name="nama_tempatg" placeholder="ketik nama namaproduk yg tertera">
        <input type="submit" name="cari" value="Cari">
    </form> 
    <?php
    $hasilPencarian = [];

    if (isset($_POST['cari']) && !empty($_POST['nama_tempatg'])) {
        $cariStatus = $_POST['status'];
        $namatempatg = $_POST['nama_tempatg'];

        foreach ($produc as $produk) {
            if ($produk['status'] == $cariStatus && stristr($produk['namaproduk'], $namatempatg) !== false) {
                $hasilPencarian[] = $produk;
            }
        }
    }

    if (!empty($hasilPencarian)): ?>
        <h2>Hasil Pencarian:</h2>
        <ul>
            <?php foreach ($hasilPencarian as $produk): ?>
                <li><?= $produk['namaproduk'] ?> = Harga: <?= $produk['harga'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($_POST['cari']) && empty($_POST['nama_tempatg'])): ?>
        <p>Silakan masukkan nama namaproduk yang ingin Anda cari.</p>
    <?php else: ?>
        <p>Tidak ada produk yang sesuai dengan pencarian Anda.</p>
    <?php endif; ?>
</body>
</html>