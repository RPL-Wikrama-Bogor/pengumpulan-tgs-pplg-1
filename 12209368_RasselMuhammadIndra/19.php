<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
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
</body>
</html>
=======
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        min-height: 100vh;
        background: linear-gradient(45deg, gray, white);
    }

    h2 {
        width: 100%;
        height: 60px;
        justify-content: center;
        padding: 20px;
        display: flex;
        position: relative;
        clear: left;
    }

    .base {
        width: 100%;
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        position: relative;
    }

    .form {
        width: 65%;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .form h3 {
        margin-top: 10px;
    }

    .form input[type='text'],
    .form input[type='number'] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }

    .form input[type='submit'] {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .form input[type='submit']:hover {
        background-color: #0056b3;
    }
</style>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghasilan Penjualan Tiket Bioskop</title>
</head>

<body>
    <h2>Penghasilan Penjualan Tiket Bioskop</h2>
    <div class="base">
        <div class="form">
            <form action="" method="post">
                <h3>VIP (MAX = 50)</h3>
                <input type="number" name="vip" max="50" required>
                <h3>EKSEKUTIF (MAX = 50)</h3>
                <input type="number" name="eksekutif" max="50" required>
                <h3>EKONOMI (MAX = 50)</h3>
                <input type="number" name="ekonomi" max="50" required>
                <button type="submit" name="submit"> Submit</button>
                <br>

        </div>
    </div>
    <div class="base">
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
                    }
                }
            }
        }

        ?>
    </div>
</body>

</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
