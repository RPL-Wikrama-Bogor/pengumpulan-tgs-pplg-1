<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

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
</body>

</html>