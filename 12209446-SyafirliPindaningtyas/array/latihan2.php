<?php
$furnitures = [
    [
        'item' => 'Rak Piring 100cm x 200cm',
        'harga' => 300000,
        'tipe' => 'Rakitan',
    ],
    [
        'item' => 'Meja Belajar Classic',
        'harga' => 150000,
        'tipe' => 'Rakitan',
    ],
    [
        'item' => 'Kursi Taman 2 Seater',
        'harga' => 270000,
        'tipe' => 'Rakitan',
    ],
    [
        'item' => 'Ranjang Bayi',
        'harga' => 450000,
        'tipe' => 'Non-Rakitan',
    ],
    [
        'item' => 'Meja Rias',
        'harga' => 50000,
        'tipe' => 'Non-Rakitan',
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture</title>


</head>

<body>
    
    <form action="" method="post">
        <table border="5">
            <h2>Daftar dan Harga !</h2>
            <tr>
                <td><strong>Nama Furniture</strong></td>
                <td><strong>Harga</strong></td>
            </tr>
            <?php foreach ($furnitures as $key => $furniture) : ?>
                <tr>
                    <td><?= $furniture['item'] ?></td>
                    <td><?= $furniture['harga'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <br>
        <h2>Pilih</h2>
        <form action="" method="POST" id="purchase-form">

            <label for="rakitan_item">Pilih Furniture Rakitan : </label>
            <select id="rakitan_item" name="rakitan_item">
                <option hidden disabled selected>--pilih--</option>
                <?php foreach ($furnitures as $item) : ?>
                    <?php if ($item['tipe'] == 'Rakitan') : ?>
                        <option value="<?= $item['item']; ?>"><?= $item['item']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select><br>

            <label for="rakitan_quantity" required>Jumlah Pembelian Rakitan : </label>
            <option hidden disabled selected>--pilih--</option>
            <input type="number" id="rakitan_quantity" name="rakitan_quantity" required><br>


            <label for="non_item">Pilih Furniture Non-Rakitan : </label>
            <select id="non_item" name="non_item">
                <option hidden disabled selected>--pilih--</option>
                <?php foreach ($furnitures as $item) : ?>
                    <?php if ($item['tipe'] == 'Non-Rakitan') : ?>
                        <option value="<?= $item['item']; ?>"><?= $item['item']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select><br>

            <label for="non_quantity">Jumlah Pembelian Non-Rakitan : </label>
            <input type="number" id="non_quantity" name="non_quantity"><br>
            <input type="submit" value="Beli">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Menghitung total
            $total_cost = 0;

            if (isset($_POST["rakitan_item"]) && $_POST["rakitan_quantity"]) {
                $rakitan_item = $_POST["rakitan_item"];
                $rakitan_quantity = (int)$_POST["rakitan_quantity"];
                $rakitanKey = array_search($rakitan_item, array_column($furnitures, "item"));
                $rakitan_price = $furnitures[$rakitanKey]['harga'];
            } else {
                $rakitan_item = null;
                $rakitan_quantity = 0;
                $rakitan_price = 0;
            }

            if (isset($_POST["non_item"]) && $_POST["non_quantity"]) {
                $non_item = $_POST["non_item"];
                $non_quantity = (int)$_POST["non_quantity"];
                $non_price = $furnitures[$non_item]['harga'];
            } else {
                $non_item = null;
                $non_quantity = 0;
                $non_price = 0;
            }

            foreach ($furnitures as $item) {
                if ($item['item'] == $rakitan_item) {
                    $rakitan_price = $item['harga'];
                    $total_cost += $rakitan_price * $rakitan_quantity;
                } elseif ($item['item'] == $non_item) {
                    $non_price = $item['harga'];
                    $total_cost += $non_price * $non_quantity;
                }
            }
        ?>

            <h2>Total</h2>
            <p> Furniture Rakitan : <?= $rakitan_item ?> (<?= $rakitan_quantity ?>)<br> Harga Furniture Rakitan : <?= number_format($rakitan_price * $rakitan_quantity, 0, ',', '.'); ?>
                <br> Furniture Non-Rakitan : <?= $non_item ?> (<?= $non_quantity ?>)<br> Harga Furniture Non-Rakitan :<?= number_format($non_price * $non_quantity, 0, ',', '.'); ?>
                <br>Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b>
            </p>


        <?php } ?>

</body>

</html>