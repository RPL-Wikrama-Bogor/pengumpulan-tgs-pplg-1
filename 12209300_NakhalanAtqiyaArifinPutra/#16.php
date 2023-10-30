<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body> <h2>Hitung Nilai</h2>
    <form action="" method="post">
    <table>

    <h2>Kode Pegawai</h2>

<form method="post" action="#">
    <table>
        <tr>
            <td>Nama siswa</td>
            <td>  :  </td>
            <td><input type="number" name="sw"></td>
        </tr>
        <tr>
            <td>Data kehadiran</td>
            <td>  :  </td>
            <td><input type="number" name="kh"></td>
        </tr>
        <tr>
            <td>Nilai Bahasa Indonesia</td>
            <td>  :  </td>
            <td><input type="number" name="in"></td>
        </tr>
        <tr>
            <td>Nilau Bahasa Inggris</td>
            <td>  :  </td>
            <td><input type="number" name="ing"></td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>  :  </td>
            <td><input type="number" name="mt"></td>
        </tr>
        <tr>
            <td>Nilai DPK</td>
            <td>  :  </td>
            <td><input type="number" name="dp"></td>
        </tr>
        <tr>
            <td>Nilai Agama</td>
            <td>  :  </td>
            <td><input type="number" name="agm"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="kirim"></td>
        </tr>
    </table>
</form>


    <?php
     $nama;
     $kehadiran;
     $mtk;
     $pai;
     $dpk;
     $indo;
     $ing;
     
     $data_siswa=array(
     '$kehadiran',
     '$mtk',
     '$indo',
     '$ing',
     '$pai',
     '$dpk'
     );

     $data=array($data_siswa);
    
     count($data);
     
     if (isset($_POST['submit'])) {
        $no_pegawai = $_POST ['no_pegawai'];
        $length = strlen($no_pegawai);

     if(count($data) == 15){




     }
    }
    ?>
    </table>
</form>
</body>
</html>
=======

>>>>>>> 794ecaef1c9f9d4cdfebb92d767978912a6aed14
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    display: flex;
    flex-direction: column; 
    align-items: center; 
    min-height: 100vh;
}
h2 {
    color: #333;
}
form {
    margin-bottom: 20px;
    width: fit-content;
}
input[type="text"] {
    padding: 5px;
}
input[type="submit"] {
    padding: 5px 10px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #555;
}
.result {
    margin-top: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    background-color: #e0e0e0; 
    width: 400px;
    text-align: center;
}
.error {
    color: red;
}
    </style>
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
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
