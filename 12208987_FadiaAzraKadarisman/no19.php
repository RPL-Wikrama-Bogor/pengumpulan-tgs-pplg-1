<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghasilan Penjualan Tiket Bioskop</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: hsla(191, 60%, 89%, 1);
    background: linear-gradient(90deg, hsla(191, 60%, 89%, 1) 0%, hsla(56, 59%, 86%, 1) 50%, hsla(25, 85%, 69%, 1) 100%);
    background: -moz-linear-gradient(90deg, hsla(191, 60%, 89%, 1) 0%, hsla(56, 59%, 86%, 1) 50%, hsla(25, 85%, 69%, 1) 100%);
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 100%;
    width: 450px;
    margin: 0 auto;
    background-color: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
}

h3 {
    margin-top: 20px;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #f3a46c;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #f0a13a;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #f3a46c;
}
.result {
        margin-top: 20px;
        padding: 10px;
        background-color: white;
        width: 210px;
        max-width: 100%;
        border-radius: 15px;
        margin: 0 auto;

    }
@media screen and (max-width: 768px) {
    .container {
        padding: 10px;
    }

    input[type="number"] {
        padding: 8px;
    }
}
</style>
</head>
<body>
    <div class="container">
    <h2>Penghasilan Penjualan Tiket Bioskop</h2>
    <form action="" method="post">
        <h3>Kelas VIP</h3>
        Jumlah Tiket Terjual: <input type="number" name="t_vip" required><br>

        <h3>Kelas Eksekutif</h3>
        Jumlah Tiket Terjual: <input type="number" name="t_eks" required><br>

        <h3>Kelas Ekonomi</h3>
        Jumlah Tiket Terjual: <input type="number" name="t_eko" required><br>

        <br>
        <input type="submit" name="submit" value="Hitung Penghasilan">
    </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $t_vip = $_POST['t_vip'];
        $t_eks = $_POST['t_eks'];
        $t_eko = $_POST['t_eko'];

        $keuntungan_vip = 0;
        $keuntungan_eksekutif = 0;
        $keuntungan_ekonomi = 0;
        $total_keuntungan = 0;

        if ($t_vip >= 35) {
            $keuntungan_vip = 0.25;
        } elseif ($t_vip >= 20) {
            $keuntungan_vip = 0.15;
        } else {
            $keuntungan_vip = 0.05;
        }

        if ($t_eks >= 40) {
            $keuntungan_eksekutif = 0.20;
        } elseif ($t_eks >= 20) {
            $keuntungan_eksekutif = 0.10;
        } else {
            $keuntungan_eksekutif = 0.02;
        }

        $keuntungan_ekonomi = 0.07;

        $total_keuntungan = ($t_vip * 50 * $keuntungan_vip) + ($t_eks * 50 * $keuntungan_eksekutif) + ($t_eko * 50 * $keuntungan_ekonomi);
        echo "<br/>";
        echo "<div class=result>";
        echo "<h3>Hasil Penghitungan</h3>";
        echo "Keuntungan Kelas VIP: $" . number_format($t_vip * 50 * $keuntungan_vip, 2) . "<br>";
        echo "Keuntungan Kelas Eksekutif: $" . number_format($t_eks * 50 * $keuntungan_eksekutif, 2) . "<br>";
        echo "Keuntungan Kelas Ekonomi: $" . number_format($t_eko * 50 * $keuntungan_ekonomi, 2) . "<br>";
        echo "Total Keuntungan: $" . number_format($total_keuntungan, 2);
        echo "</div>";
    }
    ?>
</body>
</html>
