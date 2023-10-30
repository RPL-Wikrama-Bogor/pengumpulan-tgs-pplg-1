<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <title>Penghasilan Penjualan Tiket Bioskop</title>
</head>
<body>
    <h2>Penghasilan Penjualan Tiket Bioskop</h2>
    <form action="" method="post">
        <h3>Kelas VIP</h3>
        Jumlah Tiket Terjual: <input type="number" name="tiket_vip" required><br>

        <h3>Kelas Eksekutif</h3>
        Jumlah Tiket Terjual: <input type="number" name="tiket_eksekutif" required><br>

        <h3>Kelas Ekonomi</h3>
        Jumlah Tiket Terjual: <input type="number" name="tiket_ekonomi" required><br>

        <br>
        <input type="submit" name="submit" value="Hitung Penghasilan">
    </form>

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

        echo "<h3>Hasil Penghitungan</h3>";
        echo "Keuntungan Kelas VIP: $" . number_format($tiket_vip * 50 * $keuntungan_vip, 2) . "<br>";
        echo "Keuntungan Kelas Eksekutif: $" . number_format($tiket_eksekutif * 50 * $keuntungan_eksekutif, 2) . "<br>";
        echo "Keuntungan Kelas Ekonomi: $" . number_format($tiket_ekonomi * 50 * $keuntungan_ekonomi, 2) . "<br>";
        echo "Total Keuntungan: $" . number_format($total_keuntungan, 2);
    }
    ?>
=======
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <title>Box Office Revenue Results</title>
</head>
<body>
    <div class="box">
    <h2>Box Office Revenue Values</h2>
    <form action="" method="post">
        <h3>VIP Class</h3>
        Tickets sold: <input type="number" name="vip_ticket" required><br>

        <h3>Executive Class</h3>
        Tickets sold: <input type="number" name="exec_ticket" required><br>

        <h3>Economic Class</h3>
        Tickets sold: <input type="number" name="eco_ticket" required><br>

        <br>
        <input type="submit" name="submit" value="See results">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $vip_ticket = $_POST['vip_ticket'];
        $exec_ticket = $_POST['exec_ticket'];
        $eco_ticket = $_POST['eco_ticket'];

        $vip_profit = 0;
        $exec_profit = 0;
        $eco_profit = 0;
        $profit_sum = 0;

        if ($vip_ticket >= 35) {
            $vip_profit = 0.25;
        } elseif ($vip_ticket >= 20) {
            $vip_profit = 0.15;
        } else {
            $vip_profit = 0.05;
        }

        if ($exec_ticket >= 40) {
            $exec_profit = 0.20;
        } elseif ($exec_ticket >= 20) {
            $exec_profit = 0.10;
        } else {
            $exec_profit = 0.02;
        }

        $eco_profit = 0.07;

        $profit_sum = ($vip_ticket * 50 * $vip_profit) + ($exec_ticket * 50 * $exec_profit) + ($eco_ticket * 50 * $eco_profit);

        echo "<h3>Results</h3>";
        echo "VIP Class Profits: $" . number_format($vip_ticket * 50 * $vip_profit, 2) . "<br>";
        echo "Executive Class Profits: $" . number_format($exec_ticket * 50 * $exec_profit, 2) . "<br>";
        echo "Economy Class Profits: $" . number_format($eco_ticket * 50 * $eco_profit, 2) . "<br>";
        echo "Profit Sum: $" . number_format($profit_sum, 2);
    }
    ?>
    </div>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</body>
</html>
