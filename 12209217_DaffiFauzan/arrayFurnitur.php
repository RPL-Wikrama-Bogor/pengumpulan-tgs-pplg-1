<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Furnitur</title>
    <style>
        .container1 {
            text-align: center;
            display: flex;
            flex-direction: column;
            border: 5px solid black;
        }
        .container2 {
            padding: 10px;
            margin: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            border: 5px solid black;
        }
        .container3{
            padding: 10px;
            margin: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            border: 5px solid black;
        }

        .box p {
            font-size: 20px;
        }
    </style>
    <?php
    $furnitureList = [
        ["name" => "Rak Piring 100cm X 200cm", "price" => 300000, "tipe" => "rakitan"],
        ["name" => "Lemari Pajangan 5 susun", "price" => 487000, "tipe" => "rakitan"],
        ["name" => "Ranjang Bayi", "price" => 450000, "tipe" => "rakitan"]
    ];
    $furnitureList2 = [
        ["name" => "Meja Belajar Classic", "price" => 150000, "tipe" => "non-rakitan"],
        ["name" => "Kursi Tanaman 2 Seater", "price" => 270000, "tipe" => "non-rakitan"],
        ["name" => "Meja Rias Tipe Europe", "price" => 50000, "tipe" => "non-rakitan"]
    ];

    $selectedFurniture1 = "";
    $selectedFurniture2 = "";
    $totalPrice1 = "";
    $totalPrice2 = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $rakitan = $_POST["rakitan"];
        $nonrakitan = $_POST["nonrakitan"];
        $quantity1 = $_POST["quantity1"];
        $quantity2 = $_POST["quantity2"];

        if ($rakitan >= 0 && $rakitan < count($furnitureList)) {
            $selectedFurniture1 = $furnitureList[$rakitan]["name"];
            $furniturePrice1 = $furnitureList[$rakitan]["price"];

            if ($quantity1 >= 1) {
                $totalPrice1 = $furniturePrice1 * $quantity1;
            } else {
                $error = "Please enter a valid quantity for Rakitan furniture.";
            }
        } else {
            $error = "Please pick a Rakitan furniture.";
        }

        if ($nonrakitan >= 0 && $nonrakitan < count($furnitureList2)) {
            $selectedFurniture2 = $furnitureList2[$nonrakitan]["name"];
            $furniturePrice2 = $furnitureList2[$nonrakitan]["price"];

            if ($quantity2 >= 1) {
                $totalPrice2 = $furniturePrice2 * $quantity2;
            } else {
                $error = "Please enter a valid quantity for Non-Rakitan furniture.";
            }
        } else {
            $error = "Please pick a Non-Rakitan furniture.";
        }
    }
    ?>
</head>

<body>
<div class="container1">
    <div class="box">
        <h2>Daftar Furnitur I'dea</h2>
        <p>1. Nama Furnitur: Rak Piring 100cm x 200cm<br> Harga: Rp 300,000</p>
        <p>2. Nama Furnitur: Meja Belajar Classic<br> Harga: Rp 150,000</p>
        <p>3. Nama Furnitur: Kursi Tanaman 2 Seater<br> Harga: Rp 270,000</p>
        <p>4. Nama Furnitur: Lemari Pajangan 5 susun<br> Harga: Rp 487,000</p>
        <p>5. Nama Furnitur: Meja Rias Tipe Europe<br> Harga: Rp 50,000</p>
        <p>6. Nama Furnitur: Ranjang Bayi<br> Harga: Rp 450,000</p>
    </div>
</div>

<div class="container2">

    <form action="" method="post">
    <p>Pilih Furnitur Rakitan:</p>
    <select name="rakitan" id="" >
        <option hidden>Choose Furniture</option>
        <?php foreach ($furnitureList as $key => $furniture) { ?>
            <option value="<?= $key ?>"><?= $furniture['name'] ?></option>
        <?php } ?>
    </select>
    <p>Jumlah Pembelian Furniture Rakitan:</p>
    <input type="number" name="quantity1" min="1" required>

    <p>Pilih Furnitur Non-Rakitan:</p>
    <select name="nonrakitan" id="" >
        <option hidden>Choose Furniture</option>
        <?php foreach ($furnitureList2 as $key => $furniture2) { ?>
            <option value="<?= $key ?>"><?= $furniture2['name'] ?></option>
        <?php } ?>
    </select>
    <p>Jumlah Pembelian Furniture Non-Rakitan:</p>
    <input type="number" name="quantity2" min="1" >
    <input type="submit" name="submit" value="Submit">
</form>

</div>

<div class="container3">
<?php
if (!empty($error)) {
    echo "<p>$error</p>";
} else {
    if (!empty($selectedFurniture1) && !empty($totalPrice1)) {
        echo "<h3>Result:</h3>";
        echo "<p>Furniture Rakitan: $selectedFurniture1</p>";
        echo "<p>Total Price Rakitan: Rp $totalPrice1</p>";
    }
    if (!empty($selectedFurniture2) && !empty($totalPrice2)) {
        echo "<p>Furniture Non-Rakitan: $selectedFurniture2</p>";
        echo "<p>Total Price Non-Rakitan: Rp $totalPrice2</p>";
    }
}
?>
</div>

</body>
</html>
