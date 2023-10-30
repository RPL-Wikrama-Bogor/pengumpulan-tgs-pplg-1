<?php

$listBarang = [
    [
        "barang" => "Drum Set",
        "harga" => 10000000,
        "tipe" => "Rakitan"
    ],
    [
        "barang" => "Gitar Elektrik",
        "harga" => 5000000,
        "tipe" => "Non-rakitan"
    ],
    [
        "barang" => "Piano",
        "harga" => 20000000,
        "tipe" => "Rakitan"
    ],
    [
        "barang" => "Gitar Akustik",
        "harga" => 1000000,
        "tipe" => "Non-rakitan"
    ],
    [
        "barang" => "Gamelan",
        "harga" => 4000000,
        "tipe" => "Rakitan"
    ],
    [
        "barang" => "Cajon",
        "harga" => 500000,
        "tipe" => "Non-rakitan"
    ],
];

// Inisialisasi total harga
$totalHarga = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alat Musik Nirv</title>
</head>

<body>
    <table>
        <?php foreach ($listBarang as $barang): ?>
            <tr>
                <td>Nama Alat Musik:
                    <?= $barang["barang"] ?>
                </td>
            </tr>
            <tr>
                <td>Harga:
                    <?= $barang["harga"] ?>
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td></td>
        </tr>

        <form action="" method="post">
            <tr>
                <td>Pilih Alat Musik Rakitan :</td>
                <td>
                    <select name="barang_rakitan" id="barang_rakitan">
                        <option hidden>--PILIH ALAT MUSIK RAKITAN--</option>
                        <?php foreach ($listBarang as $barang): ?>
                            <?php if ($barang["tipe"] == "Rakitan"): ?>
                                <option value="<?= $barang["barang"] ?>">
                                    <?= $barang["barang"] ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Pembelian Alat Musik Rakitan :</td>
                <td><input type="number" name="jumlah_rakitan"></td>
            </tr>
            <tr>
                <td>Pilih Alat Musik Non-rakitan :</td>
                <td> <select name="barang_non_rakitan" id="barang_non_rakitan">
                        <option hidden>PILIH ALAT MUSIK NONRAKITAN</option>
                        <?php foreach ($listBarang as $barang): ?>
                            <?php if ($barang["tipe"] == "Non-rakitan"): ?>
                                <option value="<?= $barang["barang"] ?>">
                                    <?= $barang["barang"] ?>
                                </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select></td>
            </tr>
            <tr>
                <td>Jumlah Pembelian Alat Musik Non-rakitan :</td>
                <td><input type="number" name="jumlah_non_rakitan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="beli" name="submit"></td>
            </tr>
        </form>

    </table>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['barang_rakitan']) && isset($_POST['jumlah_rakitan'])) {
        $barangRakitan = $_POST['barang_rakitan'];
        $jumlahRakitan = $_POST['jumlah_rakitan'];

        foreach ($listBarang as $barang) {
            if ($barang['barang'] == $barangRakitan && $barang['tipe'] == 'Rakitan') {
                $totalHarga += $barang['harga'] * $jumlahRakitan;
                break;
            }
        }
    }

    if (isset($_POST['barang_non_rakitan']) && isset($_POST['jumlah_non_rakitan'])) {
        $barangNonRakitan = $_POST['barang_non_rakitan'];
        $jumlahNonRakitan = $_POST['jumlah_non_rakitan'];

        foreach ($listBarang as $barang) {
            if ($barang['barang'] == $barangNonRakitan && $barang['tipe'] == 'Non-rakitan') {
                $totalHarga += $barang['harga'] * $jumlahNonRakitan;
                break;
            }
        }
    }
}

if (isset($_POST['submit'])) {
    if ($totalHarga > 0) {
        echo "Total Harga: " . number_format($totalHarga, 0, ',', '.');
    } else {
        echo "Silakan pilih barang untuk dihitung total harganya.";
    }
}



?>