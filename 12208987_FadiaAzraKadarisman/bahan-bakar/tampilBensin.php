<?php 
require 'bensin.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian BBM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ddd6fe;
        }

        h1 {
            text-align: center;
        }

        center {
            margin: 100px auto;
            width: 50%;
            background-color: #a5b4fc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        select,
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #172554;
            color: #fff;
            cursor: pointer;
            border-radius: 15px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <center>
    <h1>Pembelian Produk Shell</h1>
    <form method="post" action="">
        <table>
            <tr>
                <td>Masukkan Jumlah Liter</td>
                <td>:</td>
                <td><input type="number" name="liter" required><br></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td><select name="tipe_bbm" id="tipe_bbm" required>
                        <option hidden disabled selected>--Pilih tipe--</option>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="submit" value="Beli"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>