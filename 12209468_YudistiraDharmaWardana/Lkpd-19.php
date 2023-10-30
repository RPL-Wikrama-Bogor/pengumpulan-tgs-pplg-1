<!DOCTYPE html>
<html>
<head>
    <title>Penghitungan Keuntungan Bioskop</title>
    <link rel="stylesheet" href="L_11.css">
</head>
<body>

<div class="card">
    <h1>Lkpd Algoritma 19</h1>
    <form method="post" action="">

        <input type="number" name="vip" placeholder="Tiket VIP Terjual" required>
        <input type="number" name="eksekutif" placeholder="Jumlah Tiket Ekskutif Terjual" required>
        <input type="number" name="ekonomi" placeholder="Jumlah Ekonomi Terjual" required>
        
        <input type="submit" name="submit" value="Hitung Keuntungan">
    </form>
</div>
    

    <?php
    if(isset($_POST['submit'])) {
        $vipSold = $_POST['vip'];
        $eksekutifSold = $_POST['eksekutif'];
        $ekonomiSold = $_POST['ekonomi'];
        
        $vipProfit = 0;
        $eksekutifProfit = 0;
        $ekonomiProfit = 0;
        
        if ($vipSold >= 35) {
            $vipProfit = $vipSold * 50 * 0.25;
        } elseif ($vipSold >= 20 && $vipSold < 35) {
            $vipProfit = $vipSold * 50 * 0.15;
        } else {
            $vipProfit = $vipSold * 50 * 0.05;
        }
        
        if ($eksekutifSold >= 40) {
            $eksekutifProfit = $eksekutifSold * 50 * 0.20;
        } elseif ($eksekutifSold >= 20 && $eksekutifSold < 40) {
            $eksekutifProfit = $eksekutifSold * 50 * 0.10;
        } else {
            $eksekutifProfit = $eksekutifSold * 50 * 0.02;
        }
        
        $ekonomiProfit = $ekonomiSold * 50 * 0.07;
        
        $totalProfit = $vipProfit + $eksekutifProfit + $ekonomiProfit;
        $totalTickets = ($vipSold + $eksekutifSold + $ekonomiSold) * 50;

        echo "<h3>Keuntungan Per Kelas:</h3>";
        echo "VIP: $vipProfit<br>";
        echo "Eksekutif: $eksekutifProfit<br>";
        echo "Ekonomi: $ekonomiProfit<br><br>";
        
        echo "Keuntungan Keseluruhan: $totalProfit<br>";
        echo "Jumlah Tiket VIP Terjual: " . ($vipSold * 50) . "<br>";
        echo "Jumlah Tiket Eksekutif Terjual: " . ($eksekutifSold * 50) . "<br>";
        echo "Jumlah Tiket Ekonomi Terjual: " . ($ekonomiSold * 50) . "<br>";
        echo "Total Tiket Terjual: $totalTickets";
    }
    ?>
</body>
</html>
