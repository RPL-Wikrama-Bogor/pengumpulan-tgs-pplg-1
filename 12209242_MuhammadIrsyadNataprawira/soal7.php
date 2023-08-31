<?php 
$totalGram = 0;
$hargaSebelum = 0;
$diskon = 0;
$hargaSetelah = 0;

if (isset($_POST['submit'])) {
    $totalGram = intval($_POST['totalGram']);
    
    $hargaSebelum = 500 * $totalGram;
    $diskon = 5 * $hargaSebelum / 100;
    $hargaSetelah = $hargaSebelum - $diskon;
}   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Harga Produk</title>
    <style>
        html,
        body,
        :root {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .box {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            color: white;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        label {
            margin-top: 10px;
        }

        input {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        #button {
            margin-top: 10px;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            background-color: #3448db;
            color: white;
            cursor: pointer;
        }

        #button:hover {
            background-color: #2990b9;
        }

        h2 {
            margin-top: 20px;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Kalkulator Harga Produk</h1>
            <form action="" method="post">
                <label for="totalGram">Masukkan Total Gram (Gram): </label>
                <input type="number" name="totalGram" placeholder="Gram..." required>
                <input type="submit" value="Hitung" id="button" name="submit">
            </form>
            <ul>
                <li>Sebelum diskon: <?php echo "Rp ". number_format($hargaSebelum, 2, ',', '.') ?></li>
                <li>Diskon: <?php echo "Rp ". number_format($diskon, 2, ',', '.') ?></li>
                <li>Setelah diskon: <?php echo "Rp ". number_format($hargaSetelah, 2, ',', '.') ?></li>
            </ul>
        </div>
    </div>
</body>

</html>
