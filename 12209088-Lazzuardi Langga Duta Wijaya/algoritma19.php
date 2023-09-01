<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .user-box {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .user-box p {
            margin: 0;
            font-weight: bold;
        }

        .user-box input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .user-box button {
            background-color: #96B6C5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .user-box {
                width: 80%;
            }
        }
    </style>
</head>


<body>

    <form action="" method="post">
        <div class="user-box">
            <p>VIP</p>
            <input type="number" name="vip">
            <p>EKSEKUTIF</p>
            <input type="number" name="eksekutif">
            <p>EKONOMI</p>
            <input type="number" name="ekonomi">
            <button type="submit" name="submit"> Submit</button>
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
                                        . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Keseluruhan = " . $total . "%" . "<br>" .
                                        "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                        . "Total Tiket = " . $total_tiket;
                                } else if ($eksekutif >= 20) {
                                    $keuntungan_eksekutif = 10;
                                    $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                    $total_tiket = $vip + $eksekutif + $ekonomi;
                                    echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                        . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Keseluruhan = " . $total . "%" . "<br>" .
                                        "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                        . "Total Tiket = " . $total_tiket;
                                } else if ($eksekutif < 20) {
                                    $keuntungan_eksekutif = 2;
                                    $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                    $total_tiket = $vip + $eksekutif + $ekonomi;
                                    echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                        . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Keseluruhan = " . $total . "%" . "<br>" .
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
                                        . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Keseluruhan = " . $total . "%" . "<br>" .
                                        "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                        . "Total Tiket = " . $total_tiket;
                                } else if ($eksekutif >= 20) {
                                    $keuntungan_eksekutif = 10;
                                    $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                    $total_tiket = $vip + $eksekutif + $ekonomi;
                                    echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                        . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Keseluruhan = " . $total . "%" . "<br>" .
                                        "Jumlah Tiket VIP = " . $vip . "<br>" . "Jumlah Tiket Eksekutif = " . $eksekutif . "<br>" . "Jumlah Tiket Ekonomi = " . $ekonomi . "<br>"
                                        . "Total Tiket = " . $total_tiket;
                                } else if ($eksekutif < 20) {
                                    $keuntungan_eksekutif = 2;
                                    $total = $keuntungan_eksekutif + $keuntungan_ekonomi + $keuntungan_vip;
                                    $total_tiket = $vip + $eksekutif + $ekonomi;
                                    echo "Keuntungan VIP = " . $keuntungan_vip . "%" . "<br>" . "Keuntungan Eksekutif = " . $keuntungan_eksekutif . "%" . "<br>"
                                        . "Keuntungan Ekonomi = " . $keuntungan_ekonomi . "%" . "<br>" . "Keuntungan Keseluruhan = " . $total . "%" . "<br>" .
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
        </div>
        <br>


    </form>
</body>

</html>