<?php
    $no_pegawai;
    $length;
    $no_golongan;
    $tanggal;
    $bulan;
    $tahun;
    $no_urutan;
    $tangal_lahir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <title>Kode Pegawai</title>
</head>
<body>
    <div class="box">
        <h1>Kode Pegawai</h1>
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Input Kode</td>
                    <td><input type="number" name="no_pegawai"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="result">
    <?php
        if (isset($_POST['submit'])) {
            $no_pegawai = $_POST ['no_pegawai'];
            $length = strlen($no_pegawai);

            if ($length == 11) {
                $no_golongan = substr($no_pegawai, 0, 1);
                $tanggal = substr($no_pegawai, 1, 2);
                $bulan = substr($no_pegawai, 3, 2);
                $tahun = substr($no_pegawai, 5, 4);
                $no_urutan = substr($no_pegawai, 9, 2);

                if ($bulan == "01") {
                    $bulan = " Januari ";
                }elseif ($bulan == "02") {
                    $bulan = " Februari ";
                }elseif ($bulan == "03") {
                    $bulan = " Maret ";
                }elseif ($bulan == "04") {
                    $bulan = " April ";
                }elseif ($bulan == "05") {
                    $bulan = " Mei ";
                }elseif ($bulan == "06") {
                    $bulan = " Juni ";
                }elseif ($bulan == "07") {
                    $bulan = " Juli ";
                }elseif ($bulan == "08") {
                    $bulan = " Agustus ";
                }elseif ($bulan == "09") {
                    $bulan = " September ";
                }elseif ($bulan == "10") {
                    $bulan = " Oktober ";
                }elseif ($bulan == "11") {
                    $bulan = " November ";
                }elseif ($bulan == "12") {
                    $bulan = " Desember ";
                }else {
                   $bulan = "(error)";
                }

                $tangal_lahir = $tanggal. $bulan. $tahun;
                
                echo "Golongan  = <span> $no_golongan </span>";
                echo "<br>";
                echo "Tanggal Lahir = <span> $tangal_lahir </span>";
                echo "<br>";
                echo "Nomor Urut  = <span> $no_urutan </span>";
                echo "<br>";
            }
            else {
                echo "Kode Pegawai Tidak Sesuai";
            }


        }
    ?>
    </div>
</body>
</html>