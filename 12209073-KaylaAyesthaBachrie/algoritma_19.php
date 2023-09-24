<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FAACA8;
        }

        h2 {
            text-align: center;
            padding: 20px;
            background-image: radial-gradient( circle farthest-corner at 10.2% 47%,  rgba(243,108,231,0.37) 0%, rgba(243,108,231,0.37) 0.5%, rgba(245,116,116,1) 90% );           
            color: white;
            box-shadow: 0px 0px 10px #fff;
            border-radius: 0px 0px 60px 60px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        form{
            width: 30%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Penghasilan Penjualan Tiket Bioskop</h2>
        <form action="" method="post">
            <div class="card">
                <h3>Kelas VIP</h3>
                <table>
                    
                </table>
                Jumlah Tiket Terjual: <input type="number" name="tiket_vip" required><br>
            </div>
    
            <div class="card">
                <h3>Kelas Eksekutif</h3>
                Jumlah Tiket Terjual: <input type="number" name="tiket_eksekutif" required><br>
            </div>
    
            <div class="card">
                <h3>Kelas Ekonomi</h3>
                Jumlah Tiket Terjual: <input type="number" name="tiket_ekonomi" required><br>
            </div>
    
            <br>
            <button><input type="submit" name="submit" value="Hitung Penghasilan"></button>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $tiket_vip = $_POST['tiket_vip'];
        $tiket_eksekutif = $_POST['tiket_eksekutif'];
        $tiket_ekonomi = $_POST['tiket_ekonomi'];

        $keuntungan_vip = 0;
        $keuntungan_eksekutif = 0;
        $keuntungan_ekonomi = 0;
        $total_keuntungan = 0;

        if ($tiket_vip >= 35) {
            $keuntungan_vip = 0.25;
        } elseif ($tiket_vip >= 20) {
            $keuntungan_vip = 0.15;
        } else {
            $keuntungan_vip = 0.05;
        }

        if ($tiket_eksekutif >= 40) {
            $keuntungan_eksekutif = 0.20;
        } elseif ($tiket_eksekutif >= 20) {
            $keuntungan_eksekutif = 0.10;
        } else {
            $keuntungan_eksekutif = 0.02;
        }

        $keuntungan_ekonomi = 0.07;

        $total_keuntungan = ($tiket_vip * 50 * $keuntungan_vip) + ($tiket_eksekutif * 50 * $keuntungan_eksekutif) + ($tiket_ekonomi * 50 * $keuntungan_ekonomi);

        echo "<div class='result'>";
        echo "<h3>Hasil Penghitungan</h3>";
        echo "Keuntungan Kelas VIP: $" . number_format($tiket_vip * 50 * $keuntungan_vip, 2) . "<br>";
        echo "Keuntungan Kelas Eksekutif: $" . number_format($tiket_eksekutif * 50 * $keuntungan_eksekutif, 2) . "<br>";
        echo "Keuntungan Kelas Ekonomi: $" . number_format($tiket_ekonomi * 50 * $keuntungan_ekonomi, 2) . "<br>";
        echo "Total Keuntungan: $" . number_format($total_keuntungan, 2);
        echo "</div>";
    }
    ?>
</body>
</html>