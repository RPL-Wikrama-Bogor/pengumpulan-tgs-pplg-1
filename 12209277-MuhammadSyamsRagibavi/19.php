<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-color: grey;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .form input[type='submit']:hover {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="base">
        <div class="form">


            <form action="" method="post">
                <h3>VIP (MAX = 50)</h3>
                <input type="number" name="vip" max="50" required>
                <h3>EKSEKUTIF (MAX = 50)</h3>
                <input type="number" name="eksekutif" max="50" required>
                <h3>EKONOMI (MAX = 50)</h3>
                <input type="number" name="ekonomi" max="50" required>
                <input type="submit" name="submit">
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
                            }
                        }
                    }
                }

                ?>

            </form>
        </div>
    </div>
</body>

</html>