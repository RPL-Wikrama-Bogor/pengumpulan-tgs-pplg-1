<?php
$furniture = [
    [
        "nama" => "Boneka",
        "harga"  => 55.000,
        "tipe" => "non-rakitan"
    ],
    [
        "nama" => "Lemari 5 Susun",
        "harga"  => 150.0000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Lego",
        "harga"  => 200.0000,
        "tipe" => "rakitan"
    ],
    [
        "nama" => "Baju",
        "harga"  => 75.0000,
        "tipe" => "non-rakitan"
    ],
    [
        "nama" => "Kacamata",
        "harga"  => 100.0000,
        "tipe" => "non-rakitan"
    ],
    [
        "nama" => "Meja Belajar",
        "harga"  => 250.000,
        "tipe" => "rakitan"
    ]
];

// Calculate the total price based on selected items and quantities
if (isset($_POST['beli'])) {
    $totalPrice = 0;
    $barangRakitan = $_POST['barang_rakitan'];
    $jumlahRakitan = (int)$_POST['jumlah_rakitan'];
    $barangNonRakitan = $_POST['barang_nonrakitan'];
    $jumlahNonRakitan = (int)$_POST['jumlah_nonrakitan'];

    // Calculate the total price for selected rakitan items
    foreach ($furniture as $item) {
        if ($item['nama'] === $barangRakitan) {
            $totalPrice += $item['harga'] * $jumlahRakitan;
        }
    }

    // Calculate the total price for selected non-rakitan items
    foreach ($furniture as $item) {
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
        foreach ($furniture as $furni):
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
        <label for=""><b>Pilih Furniture Rakitan : </b></label>
        <select name="barang_rakitan" id="barang">
            <option value="hidden">---pilih---</option>
            <?php foreach($furniture as $furni): ?>
                <?php if($furni['tipe'] == "rakitan"):  ?>
                <option value="<?= $furni["nama"] ?>">
                <?= $furni["nama"]?>
                </option>   
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <label for=""><b>Jumlah Furniture Rakitan :</b></label>
        <input type="number" name="jumlah_rakitan" id="jumlah_rakitan">
        <br>
        <label for=""><b>Pilih Furniture Non-Rakitan : </b></label>
        <select name="barang_nonrakitan" id="">
            <option value="hidden">---pilih---</option>
            <?php
            foreach($furniture as $furni){
                if($furni['tipe'] == "non-rakitan"){
                    echo '<option value="' . $furni['nama'] . '">' . $furni['nama'] . '</option>';
                }
            }
            ?>
        </select>
        <br>
        <label for="jumlah_nonrakitan"><b>Jumlah Furniture Non-Rakitan:</b></label>
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