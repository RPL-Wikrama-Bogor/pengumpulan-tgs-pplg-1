<?php 
$fashion = [
    [
        'namaPakaian' => 'Sweater Y2K Grunge Butterfly',
        'harga' => 200000,
        'tipe' => 'atasan',
    ],
    [
        'namaPakaian' => 'THE3ACH Softstyle T-Shirt',
        'harga' => 100000,
        'tipe' => 'atasan',
    ],
    [
        'namaPakaian' => 'Frill Peter Collar Blouse',
        'harga' => 180000,
        'tipe' => 'atasan',
    ],
    [
        'namaPakaian' => 'THE3ACH Rok Midi',
        'harga' => 100000,
        'tipe' => 'bawahan',
    ],
    [
        'namaPakaian' => 'Baggy Boyfriend Jeans',
        'harga' => 150000,
        'tipe' => 'bawahan',
    ],
]
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE3ACH</title>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE3ACH</title>
    <style>
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #4158D0;
            background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(100,43,115,1) 0%, rgba(4,0,4,1) 90% );
            margin: 0;
            padding: 0;
        }

        /* Style the header section */
        h1 {
            text-align: center;
            padding: 20px;
            background-image: radial-gradient( circle farthest-corner at 10.2% 47%,  rgba(243,108,231,0.37) 0%, rgba(243,108,231,0.37) 0.5%, rgba(245,116,116,1) 90% );           
            color: white;
            box-shadow: 0px 0px 10px #fff;
            border-radius: 0px 0px 60px 60px;
        }

        .container {
            max-width: 50%;
            margin: 0 auto;
            padding: 20px;
        }
        
        table {
            border-radius:10px;
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px #fff;
        }

        .table{
            padding: 100px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        .card{
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px #fff;
        }

        .option {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        select, input[type="number"]{
            width: 96%;
            padding: 10px;
            margin-bottom: 10px;
        }

        select, input[type="submit"]{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .result{
            background-color: #fff;
            border-radius: 10px;
            padding: 100px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .button{
            background-image: radial-gradient( circle farthest-corner at 10.2% 47%,  rgba(243,108,231,0.37) 0%, rgba(243,108,231,0.37) 0.5%, rgba(245,116,116,1) 90% );   
            border: 0;
            border-radius: 10px;
        }
        /* Apply responsive design for screens smaller than 768px */
        @media screen and (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            table {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    
    <h1>THE3ACH SHOP</h1>
    <div class="container">
        <form action="" method="post">
            <table>
                    <tr>
                        <td><strong>Daftar Pakaian</strong></td>
                        <td><strong>Harga</strong></td>
                    </tr>
                    <?php foreach ($fashion as $key => $fsn) : ?>
                    <tr>
                        <td><?= $fsn['namaPakaian'] ?></td>
                        <td><?= $fsn['harga'] ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
            <br>
            <br>
        </form>
    </div>
    <!-- pilih pakaian -->
    <div class="container">
        <form action="" method="post" id="purchase-form">
            <!-- atasan -->
            <div class="card">
                <label for="fs_atasan">Pilih Atasan :</label>
                <select id="fs_atasan" name="fs_atasan">
                    <option hidden disabled selected>--pilih atasan--</option>
                    <?php foreach ($fashion as $atasan): ?>
                        <?php if ($atasan['tipe'] == 'atasan'): ?>
                            <option value="<?= $atasan['namaPakaian']; ?>"><?= $atasan['namaPakaian']; ?> - Rp <?= number_format($atasan['harga'], 0, ',', '.'); ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select><br>
                <label for="atasan_quantity">Jumlah Pembelian Atasan :</label>
                <input type="number" id="atasan_quantity" name="atasan_quantity"><br>

            <!-- bawahan -->
                <label for="fs_bawahan">Pilih Bawahan :</label>
                <select id="fs_bawahan" name="fs_bawahan">
                    <option hidden disabled selected>--pilih bawahan--</option>
                        <?php foreach ($fashion as $bawahan): ?>
                            <?php if ($bawahan['tipe'] == 'bawahan'): ?>
                                <option value="<?= $bawahan['namaPakaian']; ?>"><?= $bawahan['namaPakaian']; ?> - Rp <?= number_format($bawahan['harga'], 0, ',', '.'); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                </select><br>
                <label for="bawahan_quantity">Jumlah Pembelian Bawahan :</label>
                <input type="number" id="bawahan_quantity" name="bawahan_quantity"><br>
                        
                <input class="button" type="submit" value="beli">
            </div>
        </form>
    </div>
            
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $total_cost = 0;
                
            if(isset($_POST["fs_atasan"]) && $_POST["atasan_quantity"]){
                $fsAtasan = $_POST["fs_atasan"];
                $atasan_quantity = (int)$_POST["atasan_quantity"];
                $atasanKey = array_search($fsAtasan, array_column($fashion, 'namaPakaian'));
                $atasan_price = $fashion[$atasanKey]['harga'];
            }else {
                $fsAtasan = null;
                $atasan_quantity = 0;
                $atasan_price = 0;
            }
                
            if(isset($_POST["fs_bawahan"]) && $_POST["bawahan_quantity"]){
                $fsBawahan = $_POST["fs_bawahan"];
                $bawahan_quantity = (int)$_POST["bawahan_quantity"];
                $bawahanKey = array_search($fsBawahan, array_column($fashion, 'namaPakaian'));
                $bawahan_price = $fashion[$bawahanKey]['harga'];
            }else {
                $fsBawahan = null;
                $bawahan_quantity = 0;
                $bawahan_price = 0;
            }

            foreach ($fashion as $fs) {
                if ($fs['namaPakaian'] == $fsAtasan) {
                    $atasan_price = $fs['harga'];
                    $total_cost += $atasan_price * $atasan_quantity;
                }elseif ($fs['namaPakaian'] == $fsBawahan) {
                    $bawahan_price = $fs['harga'];
                    $total_cost += $bawahan_price * $bawahan_quantity;
                }
        }
    ?>

    <div class="container">

        <div class="result">
            <h2>Bukti Pembelian</h2>
            <p> Atasan : <?= $fsAtasan ?> (<?= $atasan_quantity ?>)<br> Harga Atasan : <?= number_format($atasan_price * $atasan_quantity, 0, ',', '.'); ?>
                
            <br>Bawahan : <?= $fsBawahan ?> (<?= $bawahan_quantity ?>)<br> Harga Bawahan :<?= number_format($bawahan_price * $bawahan_quantity, 0, ',', '.'); ?>
            
            <br>Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p>
            <?php } ?>
        </div>
    </div>

</body>
</html>