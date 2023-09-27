<?php
include 'proses.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="pembayaran">
    <h2>Bahan Bakar</h2>
    <table>
        <form action="" method="post">
            <tr>
                <td>Masukan Jumlah Liter</td>
                <td>:</td>
                <td><input type="number" name="liter" required></td>
            </tr>
            <tr>
                <td>Pilih Tipe Bahan Bakar</td>
                <td>:</td>
                <td>
                    <select name="bahanBakar" required>
                        <option hidden>-----------Pilih-----------</option>
                        <option value="Shell Super">Shell Super</option>
                        <option value="Shell V-Power">Shell V-Power</option>
                        <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                        <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="button" class="btn btn-primary">Beli</button></td>
            </tr>
        </form>
    </table>
</div>
</div>
    <style>
        .pembayaran{
            margin-top: 400px;
            margin: auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            width: max-content;
            padding: 10px;
        }
      button{
        width: 200px;
        text-align: center;
      }
    </style>
</body>
</html>
