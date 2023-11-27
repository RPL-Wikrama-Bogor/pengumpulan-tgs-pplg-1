<?php 
$buku = [
    [
        'judul' => 'naruto',
        'harga' => 80000,
        'tipe' => 'komik'
    ],
    [
        'judul' => 'Mera, Puti, Emas',
        'harga' => 50000,
        'tipe' => 'komik'
    ],
    [
        'judul' => 'Spider-Man',
        'harga' => 90000,
        'tipe' => 'komik'
    ],
    [
        'judul' => 'Laut Bercerita',
        'harga' => 150000,
        'tipe' => 'novel'
    ],
    [
        'judul' => 'Hujan',
        'harga' => 95000,
        'tipe' => 'novel'
    ],
    [
        'judul' => 'Cantik itu luka',
        'harga' => 112000,
        'tipe' => 'novel'
    ]
]
?>

.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #bae6fd;
        margin: 0;
        padding: 0;
    }

    .output form{
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 600px;
        height: 100px;
        margin: 0 auto
       

    }
    
    .daftar form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 600px;
        margin: 0 auto;
    }

    .pembelian form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 500px;
        margin: 0 auto;
        margin: 50  auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    select, input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    label {
        font-weight: bold;
    }

    input[type="submit"] {
        background-color: #ec4899;
        color: #fff;
        padding: 10px 40px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        
    }

    h2 {
        font-size: 20px;
        margin-top: 20px;
    }
   

    p {
        margin-bottom: 20px;
    }
</style>
</head>
<body>
    <div class="daftar">
        <form action="" method="post">
                <table>
                    <h1>Book Store</h1>
                        <tr>
                            <td><strong>Daftar Buku</strong></td>
                            <td><strong>Harga</strong></td>
                        </tr>
                        <?php foreach ($buku as $key => $value) : ?>
                            <tr>
                                <td>Judul Buku: <?= $value['judul'] ?></td>
                                <td>Harga: <?= $value['harga'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                </table>
        </form>  
    </div>
    <div class="pembelian">
        <form action="" method="post">
            <h1>Form pembelian</h1>       
            <label for="buku_novel">Pilih Makanan:</label>
            <select id="buku_novel" name="buku_novel">
                <option hidden disabled selected>--Pilih Novel--</option>
                <?php foreach ($buku as $book): ?>
                    <?php if ($book['tipe'] == 'novel'): ?>
                        <option value="<?= $book['judul']; ?>"><?= $book['judul']; ?> - Rp <?= number_format($book['harga'], 0, ',', '.'); ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                </select><br>
                    
                    <label for="banyak_novel" >Jumlah Pembelian Buku:</label>
                    <input type="number" id="banyak_novel" name="banyak_novel" >
        
                <label for="buku_komik">Pilih Komik:</label>
                <select id="buku_komik" name="buku_komik">
                    <option hidden disabled selected>--Pilih Komik--</option>
                    <?php foreach ($buku as $book): ?>
                        <?php if ($book['tipe'] == 'komik'): ?>
                        <option value="<?= $book['judul']; ?>"><?= $book['judul']; ?> - Rp <?= number_format($book['harga'], 0, ',', '.'); ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                </select><br> 
                    <label for="banyak_komik">Jumlah Pembelian Komik:</label>
                    <input type="number" id="banyak_komik" name="banyak_komik">
                    
                    <input type="submit" value="Beli">                
        </form> 
    </div>
  
    <br><br>
    
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $buku_novel = $_POST["buku_novel"];
            $banyak_novel = (int)$_POST["banyak_novel"];
            $buku_komik = $_POST["buku_komik"];
            $banyak_komik = (int)$_POST["banyak_komik"];


        if(isset($_POST["buku_novel"]) && $_POST["buku_novel"] >= 1){
            $buku_novel = $_POST["buku_novel"];
            $banyak_novel = (int)$_POST["banyak_novel"];
            $harga_novel = $_POST["harga"];

        } else {
            $buku_novel = null;
            $banyak_novel = 0;
            $harga_novel = 0;

        }

        if(isset($_POST["buku_komik"]) && $_POST["buku_komik"] >= 1){
            $buku_komik = $_POST["buku_komik"];
            $banyak_komik = (int)$_POST["banyak_komik"];
            $harga_komik = $_POST["harga"];

        } else {
            $buku_komik = null;
            $banyak_komik = 0;
            $harga_komik = 0;

        }

        $total_cost = 0;
        
        foreach ($buku as $book) {
            if ($book['judul'] == $buku_novel) {
                $harga_novel = $book['harga'];
                $total_cost += $harga_novel * $banyak_novel;
            } elseif ($book['judul'] == $buku_komik) {
                $harga_komik = $book['harga'];
                $total_cost += $harga_komik * $banyak_komik;
            }
        }
    ?>
    <div class="output">
        <form>
            <table>
                <tr>
                    <th>Bukti Pembelian</th>
                    <td>Buku Novel : <?= $buku_novel ?> (<?= $banyak_novel ?>)<br> Harga Novel : <?= number_format($harga_novel * $banyak_novel, 0, ',', '.'); ?></td>
                    <td>Buku Komik : <?= $buku_komik ?> (<?= $banyak_komik ?>)<br> Harga Komik :<?= number_format($harga_komik * $banyak_komik, 0, ',', '.'); ?></td>
                    <td>Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></td>
                </tr>
            </table>
        </form>
    </div>

    <?php } ?>

</body>
</html>