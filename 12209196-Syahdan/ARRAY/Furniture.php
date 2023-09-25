<?php
// Array untuk menyimpan informasi barang
$barang = array(
    "Kursi" => array("Tipe" => "Rakitan", "Harga" => 1200000),
    "PC" => array("Tipe" => "Rakitan", "Harga" => 15000000),
    "Kulkas" => array("Tipe" => "Non-Rakitan", "Harga" => 8000000),
    "Meja" => array("Tipe" => "Non-Rakitan", "Harga" => 4500000)
);

// Inisialisasi jumlah barang rakitan dan non-rakitan
$jumlah_rakitan = 0;
$jumlah_non_rakitan = 0;

// Inisialisasi total harga
$total_harga = 0;

// Fungsi untuk menghitung jumlah barang rakitan
function hitungJumlahBarangRakitan($barang) {
    $jumlah_rakitan = 0;
    foreach ($barang as $nama => $info) {
        if ($info["Tipe"] == "Rakitan") {
            $jumlah_rakitan++;
        }
    }
    return $jumlah_rakitan;
}

// Fungsi untuk menghitung jumlah barang non-rakitan
function hitungJumlahBarangNonRakitan($barang) {
    $jumlah_non_rakitan = 0;
    foreach ($barang as $nama => $info) {
        if ($info["Tipe"] == "Non-Rakitan") {
            $jumlah_non_rakitan++;
        }
    }
    return $jumlah_non_rakitan;
}

// Fungsi untuk menghitung total harga
function hitungTotalHarga($barang) {
    $total_harga = 0;
    foreach ($barang as $nama => $info) {
        $total_harga += $info["Harga"];
    }
    return $total_harga;
}

// Memproses pemilihan barang
if (isset($_POST['hitung'])) {
    $jumlah_barang_rakitan = $_POST['jumlah_barang_rakitan'];
    $jumlah_barang_non_rakitan = $_POST['jumlah_barang_non_rakitan'];

    // Menghitung jumlah barang rakitan dan non-rakitan
    $jumlah_rakitan = $jumlah_barang_rakitan;
    $jumlah_non_rakitan = $jumlah_barang_non_rakitan;

    // Menghitung total harga berdasarkan jumlah barang yang dipilih
    $total_harga = ($jumlah_barang_rakitan * $barang["Kursi"]["Harga"]) + ($jumlah_barang_non_rakitan * $barang["Kulkas"]["Harga"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Furniture</title>
</head>
<body>
    <h1>Daftar Furniture</h1>
    
    <form method="post">
        <div style="display: flex; flex-wrap: wrap;">
            <?php foreach ($barang as $nama => $info) : ?>
                <div style="border: 1px solid black; padding: 10px; margin: 10px;">
                    <p>Nama Barang: <?php echo $nama; ?></p>
                    <p>Tipe: <?php echo $info["Tipe"]; ?></p>
                    <p>Harga: Rp <?php echo number_format($info["Harga"], 0, ',', '.'); ?></p>
                    <?php
                        $tipe_barang = ($info["Tipe"] == "Rakitan") ? "barang_rakitan" : "barang_non_rakitan";
                        $jumlah_barang = (isset($_POST[$tipe_barang])) ? $_POST[$tipe_barang] : 0;
                    ?>
                    <label>Jumlah <?php echo $info["Tipe"]; ?>:
                        <input type="number" name="<?php echo $tipe_barang; ?>[<?php echo $nama; ?>]" value="<?php echo $jumlah_barang; ?>">
                    </label>
                </div>
            <?php endforeach; ?>
        </div>

        <input type="submit" name="beli" value="Beli">
    </form>

    <?php if (isset($_POST['beli'])) : ?>
        <?php
        $total_harga_rakitan = 0;
        $total_harga_non_rakitan = 0;

        // Menghitung total harga rakitan dan non-rakitan
        foreach ($_POST['barang_rakitan'] as $nama_barang => $jumlah_barang) {
            $harga_barang = $barang[$nama_barang]["Harga"];
            $total_harga_rakitan += $jumlah_barang * $harga_barang;
        }

        foreach ($_POST['barang_non_rakitan'] as $nama_barang => $jumlah_barang) {
            $harga_barang = $barang[$nama_barang]["Harga"];
            $total_harga_non_rakitan += $jumlah_barang * $harga_barang;
        }
        ?>

        <h2>Total Harga Barang Rakitan: Rp <?php echo number_format($total_harga_rakitan, 0, ',', '.'); ?></h2>
        <h2>Total Harga Barang Non-Rakitan: Rp <?php echo number_format($total_harga_non_rakitan, 0, ',', '.'); ?></h2>
        <h2>Total Harga Keseluruhan: Rp <?php echo number_format($total_harga_rakitan + $total_harga_non_rakitan, 0, ',', '.'); ?></h2>
    <?php endif; ?>
</body>
</html>
