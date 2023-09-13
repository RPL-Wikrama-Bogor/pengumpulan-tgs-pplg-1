<?php 
    $makanan = [
        [
            "menu" => "Kripca",
            "harga" => 17000,
            "tipe" => "snack"
        ],
        [
            "menu" => "Basreng",
            "harga" => 15000,
            "tipe" => "snack"
        ],
        [
            "menu" => "Nasi Padang",
            "harga" => 15000,
            "tipe" => "makanan-berat"
        ],
        [
            "menu" => "Nasi Goreng",
            "harga" => 12000,
            "tipe" => "makanan-berat"
        ],
        [
            "menu" => "Kue sus",
            "harga" => 3000,
            "tipe" => "snack"
        ]
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 100%;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 28px;
            text-align: center;
            color: white;
            margin: 0 auto;
            text-transform: uppercase;
            background-color: black;
            padding: 20px;
            width: 500px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            text-align: center;
        }

        ul li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            font-size: 16px;
        }

        ul li:last-child {
            border-bottom: none;
        }
        table {
            width: 545px;
            max-width: 100%;
            margin: 0 auto;
            padding: 18px;
            border-radius: 0 0 15px 15px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="number"] {
            width: 325px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #0F2C59;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #8ECDDD;
        }

        .box{
            background-color: white;
        }
        .result {
        margin-top: 20px;
        padding: 10px;
        background-color: white;
        width: 500px;
        max-width: 100%;
        border-radius: 15px;
        margin: 0 auto;

    }
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            h1 {
                font-size: 20px;
            }
            ul li {
                font-size: 14px;
            }
            input[type="submit"] {
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <table>
            <h1>Daftar Menu</h1>
            <div class="container">
            <?php foreach ($makanan as $key => $m) : ?>
                <ul>
                    <li><b>Menu: </b><?= $m['menu'] ?></li>
                    <li><b>Harga: </b> <?= $m['harga'] ?></li>
                </ul>
            <?php endforeach; ?>
            </div>
            <br>
            <form action="" method="post">
                <table class="box">
                    <h1 class="text-pil">Pilih Menu</h1>
                    <tr>
                        <td>Pilih Snack </td>
                        <td>:</td>
                        <td><select name="snack">
                            <option hidden disabled selected>--Pilih Snack--</option>
                            <?php foreach ($makanan as $item): ?>
                                <?php if ($item['tipe'] == 'snack'): ?>
                                <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Snack</td>
                        <td>:</td>
                        <td> <input type="number"  name="jumlah_snack"></td>
                    </tr>
                    <tr>
                        <td>Pilih Makanan berat </td>
                        <td>:</td>
                        <td><select name="makanan-berat">
                            <option hidden disabled selected>--Pilih Makan Berat--</option>
                            <?php foreach ($makanan as $item): ?>
                                <?php if ($item['tipe'] == 'makanan-berat'): ?>
                                <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Snack </td>
                        <td>:</td>
                        <td> <input type="number"  name="jumlah_makananberat"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="submit" value="Beli"></td>
                    </tr>
                </div>
                </table>
            </form>
</body>
</html>

<?php 
    if (isset($_POST['submit'])) {
        $total_cost =0;
    if(isset($_POST["snack"]) && isset($_POST["jumlah_snack"])){
        $snack = $_POST["snack"];
        $jmlSnack = (int)$_POST["jumlah_snack"];
        $snackKey = array_search($snack, array_column($makanan, 'snack'));
        $harga_snack = $makanan[$snackKey]['harga'];
    } else {
        $snack = NULL;
        $jmlSnack = 0;
        $harga_snack = 0;
    }

    if(isset($_POST["makanan-berat"]) && isset($_POST["jumlah_makananberat"])){
        $mknBrt = $_POST["makanan-berat"];
        $jmlMknBrt = (int)$_POST["jumlah_makananberat"];
        $mknBrtKey = array_search($mknBrt, array_column($makanan, 'makanan-berat'));
        $harga_mknBrt = $makanan[$mknBrtKey]['harga'];
    } else {
        $mknBrt = Null;
        $jmlMknBrt = 0;
        $harga_mknBrt = 0;
    }
    foreach ($makanan as $makan) {
        if ($makan['menu'] == $snack) {
            $harga_snack = $makan['harga'];
            $total_cost += $harga_snack * $jmlSnack;
        } elseif ($makan['menu'] == $mknBrt) {
            $harga_mknBrt = $makan['harga'];
            $total_cost += $harga_mknBrt * $jmlMknBrt;
        }
    }
?>
<br>
<table class="result">
    <tr>
        <td><h2>Bukti Pembelian</h2></td>
    </tr>
    <tr>
        <td>Snack : <?= $snack ?> (<?= $jmlSnack ?>)<br> Harga Snack : <?= number_format($harga_snack * $jmlSnack, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td>Makanan Berat : <?= $mknBrt ?> (<?= $jmlMknBrt ?>)<br> Harga Makanan berat : <?= number_format($harga_mknBrt * $jmlMknBrt, 0, ',', '.'); ?></td>
    </tr>
    <tr>
        <td><br>Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p></td>
    </tr>
</table>

<?php } ?>