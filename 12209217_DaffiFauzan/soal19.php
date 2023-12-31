<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket VIP</title>
    <Style>
        .container{
            display: flex;
            flex-direction: column;
            margin: 10px auto;
        }
        .form{
            text-align: center;
            border-radius: 30px;
            background-color: #DAC0A3;
        }
        .form label{
            font-size: 20px;
        }
        .form input{
            width: 15vw;
            height: 5vh;
            border-radius: 10px;
        }
        .form button{
            background-color: white;
            font-size: medium;
            margin: 50px;
            width: 20vw;
            height: 10vh;
            border-radius: 20px;
        }
        .hasil{
            text-align: center;
            margin: 10px;
            padding: 30px;
            background-color: #DAC0A3;
        }

    </Style>
    
</head>
<body>
    <form action="" method="post">
        <div class="container">
        <div class="form">
            <h1>Menghitung ticket</h1>
        <label>Vip</label><br>
        <input type="number" name= "vip" value="Vip" max="50" ><br>
        <label>Eksekutif</label><br>
            <input type="number" name= "eksekutif" value="Eksekutif" max="50"><br>
        <label>Ekonomi</label><br>
            <input type="number" name= "ekonomi" value="ekonomi" max="50"><br>
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
    echo '<div class="hasil">';
    echo "Keuntungan Tiket VIP: Rp " . number_format($keuntunganVIP) . "<br>";
    echo "Keuntungan Tiket Eksekutif: Rp " . number_format($keuntunganEksekutif) . "<br>";
    echo "Keuntungan Tiket Ekonomi: Rp " . number_format($keuntunganEkonomi) . "<br>";
    echo "Jumlah Tiket VIP: " . $jumlahTiketVIP . "<br>";
    echo "Jumlah Tiket Eksekutif: " . $jumlahTiketEksekutif . "<br>";
    echo "Jumlah Tiket Ekonomi: " . $jumlahTiketEkonomi. "<br>";
    echo "Jumlah Keuntungan keseluruhan: Rp ". number_format($totalKeuntungan). "<br>";
    echo '</div>';
    }
?>




</div>
</body>
</html>