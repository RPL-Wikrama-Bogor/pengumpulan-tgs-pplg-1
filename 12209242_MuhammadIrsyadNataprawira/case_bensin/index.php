<?php require './BensinController.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Pembelian BBM</title>

</head>
<style>
    *,
    body {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        transition: .3s ease-in-out;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        flex-direction: column;
    }

    form {
        margin-bottom: 20px;
    }

    input[type="submit"] {
        border: none;
        padding: 8px;
        width: 100%;
        background-color: rgb(253 224 71);
        transition: all .3s ease-in-out;
        border-radius: 5px;
        font-weight: bold;
    }

    input[type="submit"]:hover {
        background-color: rgb(250 204 21);
    }

    .box {
        background-color: rgb(212 212 212);
        padding: 20px 10px;
        border-radius: 5px;
        border: dashed .2px;
        font-weight: 500;
        text-align: center;
        color: black;
    }

    #dark-mode-toggle {
        background-color: white;
        font-size: 20px;
        padding: 5px;
        border-radius: 50%;
        cursor: pointer;
        color: white;
    }

    .dark-mode {
        background-color: rgb(3 7 18);
        color: white;
    }
</style>

<body>
    <div class="container">

        <h1>Form Pembelian Produk Shell</h1>
        <br>
        <form method="post" action="">
            <label for="liter">Masukkan Jumlah Liter:</label>
            <input type="number" name="liter" id="liter" required><br><br>

            <label for="tipe_bbm">Pilih Tipe Bahan Bakar:</label>
            <select name="tipe_bbm" id="tipe_bbm" required>
                <option value="" disabled selected>--Pilih Tipe--</option>
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select><br><br>

            <input type="submit" name="submit" value="Beli">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $liter = floatval($_POST['liter']);
            $tipeBBM = $_POST['tipe_bbm'];

            $hargaBBM = [
                "Shell Super" => 15420.00,
                "Shell V-Power" => 16130.00,
                "Shell V-Power Diesel" => 18310.00,
                "Shell V-Power Nitro" => 16510.00
            ];
        ?>
            <?php
            if (array_key_exists($tipeBBM, $hargaBBM)) {
                $bbm = new Buy($tipeBBM, $hargaBBM[$tipeBBM], 0.10);
                $bbm->jumlah = $liter;

            ?>
                <div class="box">
                    <p><?php $bbm->getStruk() ?></p>
                </div>
        <?php
            } else {
                echo "Tipe bahan bakar tidak valid!";
            }
        }

        ?>
    </div>

</body>

</html>