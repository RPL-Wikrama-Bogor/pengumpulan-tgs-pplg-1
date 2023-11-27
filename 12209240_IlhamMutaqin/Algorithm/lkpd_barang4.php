<?php
$barangFurniture = [
    [
        "nama" => "kompor",
        "harga"  => 1000000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Kursi",
        "harga"  => 2000000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Lemari",
        "harga"  => 1500000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Sound Tv",
        "harga"  => 2000000,
        "tipe" => "non-rakitan"
    ],
    [
        "nama" => "airfrayer",
        "harga"  => 100000,
        "tipe" => "non-rakitan"
    ],
    [
        "nama" => "Laptop",
        "harga"  => 10000000,
        "tipe" => "rakitan"
    ]
];

if (isset($_POST['beli'])) {
    $totalPrice = 0;
    $barangRakitan = $_POST['barang_rakitan'];
    $jumlahRakitan = (int)$_POST['jumlah_rakitan'];
    $barangNonRakitan = $_POST['barang_nonrakitan'];
    $jumlahNonRakitan = (int)$_POST['jumlah_nonrakitan'];

    foreach ($barangFurniture as $item) {
        if ($item['nama'] === $barangRakitan) {
            $totalPrice += $item['harga'] * $jumlahRakitan;
        }
    }

    foreach ($barangFurniture as $item) {
        if ($item['nama'] === $barangNonRakitan) {
            $totalPrice += $item['harga'] * $jumlahNonRakitan;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            text-align: center;
            display: inline-block;
        }

        h1 {
            text-align: center;
        }
    </style>
    <title>Daftar Furniture</title>
</head>
<body>
    <h1>Daftar Furniture</h1>
    <hr>
    <center>
        <?php
        foreach ($barangFurniture as $furni):
        ?>
        <div class="card">
            <h2><?= $furni['nama']; ?></h2>
            <p>Harga: <?= number_format($furni['harga'], 0, ',', '.'); ?></p>
            <p>Tipe: <?= $furni['tipe']; ?></p>
        </div>
        <?php
        endforeach;
        ?>
    </center>
    <hr>
    <form action="" method="post">
        <label for=""><b>Barang Rakitan : </b></label>
        <select name="barang_rakitan" id="barang">
            <option value="hidden">---Pilih barang rakitan---</option>
            <?php foreach($barangFurniture as $furni): ?>
                <?php if($furni['tipe'] == "rakitan"):  ?>
                <option value="<?= $furni["nama"] ?>">
                <?= $furni["nama"]?>
                </option>   
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <label for=""><b>Jumlah barang rakitan :</b></label>
        <input type="number" name="jumlah_rakitan" id="jumlah_rakitan">
        <br>
        <label for=""><b>Barang non-rakitan : </b></label>
        <select name="barang_nonrakitan" id="">
            <option value="hidden">---Pilih barang non-rakitan---</option>
            <?php
            foreach($barangFurniture as $furni){
                if($furni['tipe'] == "non-rakitan"){
                    echo '<option value="' . $furni['nama'] . '">' . $furni['nama'] . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <label for="jumlah_nonrakitan"><b>Jumlah Barang Non-Rakitan:</b></label>
        <input type="number" name="jumlah_nonrakitan" id="jumlah_nonrakitan" value="0">
        <br>
        <input type="submit" name="beli" value="Beli">
    </form>
    
    <?php
    if (isset($_POST['beli'])) {
        if ($totalPrice > 0) {
            echo "<p>Total Harga: " . number_format($totalPrice, 0, ',', '.') . "</p>";
        } else {
            echo "<p>Silakan pilih barang untuk dihitung total harganya.</p>";
        }
    }
    ?>
</body>
</html>