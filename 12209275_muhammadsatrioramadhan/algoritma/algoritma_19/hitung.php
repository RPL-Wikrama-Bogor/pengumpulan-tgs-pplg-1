<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil inputan jumlah tiket per kelas
    $jumlahVIP = $_POST["vip"];
    $jumlahEksekutif = $_POST["eksekutif"];
    $jumlahEkonomi = $_POST["ekonomi"];

    // Menghitung keuntungan per kelas
    $keuntunganVIP = 0;
    $keuntunganEksekutif = 0;
    $keuntunganEkonomi = 0;

    if ($jumlahVIP >= 35) {
        $keuntunganVIP = $jumlahVIP * 25 / 100;
    } elseif ($jumlahVIP >= 20) {
        $keuntunganVIP = $jumlahVIP * 15 / 100;
    } else {
        $keuntunganVIP = $jumlahVIP * 5 / 100;
    }

    if ($jumlahEksekutif >= 40) {
        $keuntunganEksekutif = $jumlahEksekutif * 20 / 100;
    } elseif ($jumlahEksekutif >= 20) {
        $keuntunganEksekutif = $jumlahEksekutif * 10 / 100;
    } else {
        $keuntunganEksekutif = $jumlahEksekutif * 2 / 100;
    }

    $keuntunganEkonomi = $jumlahEkonomi * 7 / 100;

    // Menghitung total tiket dan keuntungan keseluruhan
    $totalTiket = $jumlahVIP + $jumlahEksekutif + $jumlahEkonomi;
    $totalKeuntungan = $keuntunganVIP + $keuntunganEksekutif + $keuntunganEkonomi;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
</head>

<body>
    <h1>Hasil Perhitungan</h1>
    <p>Jumlah Tiket VIP Terjual: <?php echo $jumlahVIP; ?></p>
    <p>Keuntungan Tiket VIP: <?php echo $keuntunganVIP; ?></p>
    <p>Jumlah Tiket Eksekutif Terjual: <?php echo $jumlahEksekutif; ?></p>
    <p>Keuntungan Tiket Eksekutif: <?php echo $keuntunganEksekutif; ?></p>
    <p>Jumlah Tiket Ekonomi Terjual: <?php echo $jumlahEkonomi; ?></p>
    <p>Keuntungan Tiket Ekonomi: <?php echo $keuntunganEkonomi; ?></p>
    <p>Total Tiket Terjual: <?php echo $totalTiket; ?></p>
    <p>Total Keuntungan Keseluruhan: <?php echo $totalKeuntungan; ?></p>
</body>

</html>