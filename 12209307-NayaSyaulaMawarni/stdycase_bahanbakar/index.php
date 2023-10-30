<?php
    include "proses.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Bahan Bakar</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Pembelian Bahan Bakar</h1>
        <form action="" method="post">
            <label for="jumlah">Masukkan Jumlah liter:</label>
            <input type="number" name="jumlah" required><br><br>
            <label for="jenis">Pilih tipe bahan bakar:</label>
            <select name="jenis" required>
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select><br><br>
            <input type="submit" name="submit" value="Beli">
        </form>
    </div>

</body>

</html>