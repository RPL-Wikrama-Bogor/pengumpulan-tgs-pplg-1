<?php
$barang = array(
    array(
        "nama" => "Baygon",
        "harga" => "49999",
        "diskon" => true
    ),
    array(
        "nama" => "Minyak Telon",
        "harga" => "45.000",
        "diskon" => false
    ),
    array(
        "nama" => "Biskuit ROMA",
        "harga" => "15.000",
        "diskon" => false
    ),
    array(
        "nama" => "Jaket Bulu",
        "harga" => "200.000",
        "diskon" => true
    ),
    array(
        "nama" => "Kaos Kaki",
        "harga" => "25.000",
        "diskon" => false
    ),
    array(
        "nama" => "Sepatu Jordan",
        "harga" => "1,500.000",
        "diskon" => true
    )
);

// Inisialisasi variabel untuk hasil pencarian
$hasilPencarian = array();

// Inisialisasi variabel untuk barang-barang yang sedang diskon
$barangDiskon = array();

// Cek jika tombol "Cari" diklik
if (isset($_POST['cari'])) {
    $kataKunci = strtolower($_POST['kata_kunci']);
    $diskonDipilih = isset($_POST['diskon']) ? true : false;

    // Loop melalui semua barang dan mencari yang sesuai dengan kata kunci dan status diskon
    foreach ($barang as $item) {
        $namaBarang = strtolower($item['nama']);
        if (strpos($namaBarang, $kataKunci) !== false && (!$diskonDipilih || $item['diskon'])) {
            $hasilPencarian[] = $item;
            if ($item['diskon']) {
                $barangDiskon[] = $item;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>

    <!-- Tampilkan daftar barang yang sedang diskon -->
    <?php if (!empty($barangDiskon)) : ?>
        <h2>Barang-barang Sedang Diskon:</h2>
        <ul>
            <?php foreach ($barangDiskon as $item) : ?>
                <li><?php echo $item['nama']; ?> - Harga: <?php echo $item['harga']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Formulir pencarian -->
    <form method="POST" action="">
        <label for="kata_kunci">Cari Barang:</label>
        <input type="text" name="kata_kunci" id="kata_kunci">
        <label for="diskon">Hanya Diskon:</label>
        <input type="checkbox" name="diskon" id="diskon">
        <input type="submit" name="cari" value="Cari">
    </form>

    <!-- Tampilkan hasil pencarian jika ada -->
    <?php if (isset($_POST['cari'])) : ?>
        <h2>Hasil Pencarian:</h2>
        <?php if (!empty($hasilPencarian)) : ?>
            <ul>
                <?php foreach ($hasilPencarian as $item) : ?>
                    <li><?php echo $item['nama']; ?> - Harga: <?php echo $item['harga']; ?> - <?php echo ($item['diskon'] ? 'Diskon' : 'Tidak Diskon'); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Tidak ada barang yang cocok dengan kata kunci '<?php echo htmlspecialchars($_POST['kata_kunci']); ?>'.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
