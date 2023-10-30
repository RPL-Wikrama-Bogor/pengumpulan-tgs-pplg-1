<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Penjualan Tiket Bioskop</title>
</head>

<body>
    <h1>Kalkulator Penjualan Tiket Bioskop</h1>
    <form method="post" action="hitung.php">
        <label for="vip">Jumlah Tiket VIP:</label>
        <input type="number" id="vip" name="vip" required><br>

        <label for="eksekutif">Jumlah Tiket Eksekutif:</label>
        <input type="number" id="eksekutif" name="eksekutif" required><br>

        <label for="ekonomi">Jumlah Tiket Ekonomi:</label>
        <input type="number" id="ekonomi" name="ekonomi" required><br>

        <input type="submit" value="Hitung">
    </form>
</body>

</html>