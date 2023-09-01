<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket VIP</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
        <h1>Menghitung ticket</h1>
        <label>Vip<input type="number" name= "vip" value="Vip" max="50"></label>
        <label>Eksekutif<input type="number" name= "eksekutif" value="Eksekutif" max="50"></label>
        <label>Ekonomi<input type="number" name= "ekonomi" value="ekonomi" max="50"></label>
        <button type="submit" name="submit">Submit</button>  
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
    $jumlahTiketVIP = $_POST['vip'];
    $jumlahTiketEksekutif = $_POST['eksekutif'];
    $jumlahTiketEkonomi = $_POST['ekonomi'];

    $hargaVIP = 100000;
    $hargaEksekutif = 75000;
    $hargaEkonomi = 50000;


    if ($jumlahTiketVIP >= 35) {
        $keuntunganVIP = $jumlahTiketVIP * $hargaVIP * 0.25;
    } elseif ($jumlahTiketVIP >= 20) {
        $keuntunganVIP = $jumlahTiketVIP * $hargaVIP * 0.15;
    } else {
        $keuntunganVIP = $jumlahTiketVIP * $hargaVIP * 0.05;
    }

    if ($jumlahTiketEksekutif >= 40) {
        $keuntunganEksekutif = $jumlahTiketEksekutif * $hargaEksekutif * 0.20;
    } elseif ($jumlahTiketEksekutif >= 20) {
        $keuntunganEksekutif = $jumlahTiketEksekutif * $hargaEksekutif * 0.10;
    } else {
        $keuntunganEksekutif = $jumlahTiketEksekutif * $hargaEksekutif * 0.02;
    }
    $keuntunganEkonomi = $jumlahTiketEkonomi * $hargaEkonomi * 0.07;


    $totalTiket = $jumlahTiketVIP + $jumlahTiketEksekutif + $jumlahTiketEkonomi;
    $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;
    
    echo "Keuntungan Tiket VIP: Rp " . number_format($keuntunganVIP) . "<br>";
    echo "Keuntungan Tiket Eksekutif: Rp " . number_format($keuntunganEksekutif) . "<br>";
    echo "Keuntungan Tiket Ekonomi: Rp " . number_format($keuntunganEkonomi) . "<br>";
    echo "Jumlah Tiket VIP: " . $jumlahTiketVIP . "<br>";
    echo "Jumlah Tiket Eksekutif: " . $jumlahTiketEksekutif . "<br>";
    echo "Jumlah Tiket Ekonomi: " . $jumlahTiketEkonomi. "<br>";
    echo "Jumlah Keuntungan keseluruhan: Rp ". number_format($totalKeuntungan). "<br>";
    }
?>

</body>
</html>