<!DOCTYPE html>
<<<<<<< HEAD:12209472-RatuZahra/19.php
<html>

<head>
    <title>Kalkulator Keuntungan Tiket Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li strong {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Kalkulator Keuntungan Tiket Bioskop</h1>
        <form method="post" action="">
            <label for="tiketTerjualVip">Tiket Terjual VIP:</label>
            <input type="number" id="tiketTerjualVip" name="tiketTerjualVip" max="50" required>

            <label for="tiketTerjualEks">Tiket Terjual Eksekutif:</label>
            <input type="number" id="tiketTerjualEks" name="tiketTerjualEks" max="50" required>

            <label for="tiketTerjualEko">Tiket Terjual Ekonomi:</label>
            <input type="number" id="tiketTerjualEko" name="tiketTerjualEko" max="50" required>

            <input type="submit" value="Hitung Keuntungan">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tiketTerjualVip = $_POST["tiketTerjualVip"];
            $tiketTerjualEks = $_POST["tiketTerjualEks"];
            $tiketTerjualEko = $_POST["tiketTerjualEko"];

            $hargaVip = 100000;
            $hargaEks = 75000;
            $hargaEko = 50000;

            $keuntunganVip = 0;
            $keuntunganEks = 0;
            $keuntunganEko = 0;

            if ($tiketTerjualVip >= 35) {
                $keuntunganVip = $tiketTerjualVip * $hargaVip * 0.25;
            } elseif ($tiketTerjualVip >= 20 && $tiketTerjualVip < 35) {
                $keuntunganVip = $tiketTerjualVip * $hargaVip * 0.15;
            } else {
                $keuntunganVip = $tiketTerjualVip * $hargaVip * 0.05;
            }

            if ($tiketTerjualEks >= 40) {
                $keuntunganEks = $tiketTerjualEks * $hargaEks * 0.20;
            } elseif ($tiketTerjualEks >= 20 && $tiketTerjualEks < 40) {
                $keuntunganEks = $tiketTerjualEks * $hargaEks * 0.10;
            } else {
                $keuntunganEks = $tiketTerjualEks * $hargaEks * 0.02;
            }

            $keuntunganEko = $tiketTerjualEko * $hargaEko * 0.07;

            $totalTiket = $tiketTerjualVip + $tiketTerjualEks + $tiketTerjualEko;
            $keuntunganKeseluruhan = $keuntunganVip + $keuntunganEks + $keuntunganEko;

            echo "<h2>Hasil Perhitungan:</h2>";
            echo "<ul>";
            echo "<li>Keuntungan per tiket untuk kelas VIP: " . "Rp ". number_format($keuntunganVip, 2, ',', '.') . "</li>";
            echo "<li>Keuntungan per tiket untuk kelas Eksekutif: " . "Rp ". number_format($keuntunganEks, 2, ',', '.') . "</li>";
            echo "<li>Keuntungan per tiket untuk kelas Ekonomi: " . "Rp " . number_format($keuntunganEko,2, ',', '.') . "</li>";
            echo "<li>Keuntungan keseluruhan: " ."Rp " . number_format($keuntunganKeseluruhan,2, ',', '.') . "</li>";
            echo "<li>Jumlah tiket kelas VIP: " . $tiketTerjualVip . "</li>";
            echo "<li>Jumlah tiket kelas Eksekutif: " . $tiketTerjualEks . "</li>";
            echo "<li>Jumlah tiket kelas Ekonomi: " . $tiketTerjualEko . "</li>";
            echo "<li>Total tiket dari seluruh kelas: " . $totalTiket . "</li>";
            echo "</ul>";
        }
        ?>
    </div>
=======
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
            background-color: #96B6C5;
        }

        .card {
            border: 0px;
            width: 500px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #ADC4CE;
            shadow: 15px;
        
        }
        
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 15px;
        }


        button {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
        }

        h2 {
            color: #102C57;
        }

        label {
            font-size: 20px;
        }
 </style>
<body>

    <form action="" method="post">
        <p>VIP (MAX = 50)</p>
        <input type="number" name="vip">
        <p>EKSEKUTIF (MAX = 50)</p>
        <input type="number" name="eksekutif">
        <p>EKONOMI (MAX = 50)</p>
        <input type="number" name="ekonomi">
        <button type="submit" name="submit"> Submit</button>
        <br>

        <?php
        if (isset($_POST['submit'])) {
            $vip;
            $eksekutif;
            $ekonomi;
            $jumlah_tiket = 50;
            $keuntungan_vip;
            $keuntungan_eksekutif;
            $vip = $_POST['vip'];
            $eksekutif = $_POST['eksekutif'];
            $ekonomi = $_POST['ekonomi'];

            if ($vip <= $jumlah_tiket) {
                if ($eksekutif <= $jumlah_tiket) {
                    if ($ekonomi <= $jumlah_tiket) {

                        if ($vip >= 35) {
                            $keuntungan_vip = 25;
                            $keuntungan_ekonomi = 7;
                            if ($eksekutif >= 40) {
                                $keuntungan_eksekutif = 20;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            } else if ($eksekutif >= 20) {
                                $keuntungan_eksekutif = 10;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            } else if ($eksekutif < 20) {
                                $keuntungan_eksekutif = 2;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            }
                        } else if ($vip >= 20) {
                            $keuntungan_vip = 15;
                            $keuntungan_ekonomi = 7;
                            if ($eksekutif >= 40) {
                                $keuntungan_eksekutif = 20;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            } else if ($eksekutif >= 20) {
                                $keuntungan_eksekutif = 10;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            } else if ($eksekutif < 20) {
                                $keuntungan_eksekutif = 2;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            }
                        } else if ($vip < 20) {
                            $keuntungan_vip = 5;
                            $keuntungan_ekonomi = 7;
                            if ($eksekutif >= 40) {
                                $keuntungan_eksekutif = 20;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            } else if ($eksekutif >= 20) {
                                $keuntungan_eksekutif = 10;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            } else if ($eksekutif < 20) {
                                $keuntungan_eksekutif = 2;
                                $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                $total_tiket = $vip + $eksekutif + $ekonomi;
                                echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                    . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Kesuluran = " . $total . "%" . "<br>" .
                                    "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                    . "Total Tiket = " . $total_tiket;
                            }
                        }
                    } else {
                        echo "Tiket Tidak Boleh Lebih Dari 50";
                    }
                } else {
                    echo "Tiket Tidak Boleh Lebih Dari 50";
                }
            } else {
                echo "Tiket Tidak Boleh Lebih Dari 50";
            }
        }

        ?>
    </form>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/19.php
</body>

</html>