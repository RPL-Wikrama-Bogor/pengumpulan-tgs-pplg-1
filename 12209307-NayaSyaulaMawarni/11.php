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
    <title>Soal 11</title>
    <style>
        table{
            color: aqua;
        }


        body{
            color: turquoise;
            background-color: antiquewhite;
        }

        .container {
            font-family: arial;
            margin: 25px;
            width: 350px;
            height: 200px;
            outline: dashed 1px black;
        }

    /* Ukuran layar mobile phone minimal resolusi 576px */
    @media (min-width: 576px) { 
        .body{
            width: calc(50% - 6px);
        }
    }

    /* Ukuran layar tablet minimal resolusi 768px */
    @media (min-width: 768px) { 
        .body{
            width: calc(100vw / 3 - 12px);
        }
    }

    /* Ukuran layar dekstop minimal resolusi 992px */
    @media (min-width: 992px) { 
        .body{
            width: calc(100vw / 4 - 18px);
        }
    }

    /* Ukuran layar besar minimal resolusi 1200px */
    @media (min-width: 1200px) { 
        .body{
            width: calc(100vw / 5 - 24px);
        }
    }

    /* Ukuran layar sangat besar minimal resolusi 1400px */
    @media (min-width: 1400px) {
        h2{
            font-size: 20px;
        }
        p{
            font-size: 18px;
        }
    }
    </style>
</head>
<body>
    <div class="container">
    <h1 style="color:aquamarine;">Kode Pegawai</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Kode Pegawai</td>
                <td>  :  </td>
                <td><input type="number" name="no_pegawai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
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
                    $bulan = "Januari";
                }elseif ($bulan == "02") {
                    $bulan = "Februari";
                }elseif ($bulan == "03") {
                    $bulan = "Maret";
                }elseif ($bulan == "04") {
                    $bulan = "April";
                }elseif ($bulan == "05") {
                    $bulan = "Mei";
                }elseif ($bulan == "06") {
                    $bulan = "Juni";
                }elseif ($bulan == "07") {
                    $bulan = "Juli";
                }elseif ($bulan == "08") {
                    $bulan = "Agustus";
                }elseif ($bulan == "09") {
                    $bulan = "September";
                }elseif ($bulan == "10") {
                    $bulan = "Oktober";
                }elseif ($bulan == "11") {
                    $bulan = "November";
                }elseif ($bulan == "12") {
                    $bulan = "Desember";
                }else {
                   $bulan = "(error)";
                }

                $tangal_lahir = $tanggal. $bulan. $tahun;
                
                echo "Golongan  = $no_golongan";
                echo "<br>";
                echo "Tanggal Lahir = $tangal_lahir";
                echo "<br>";
                echo "Nomor Urut  = $no_urutan";
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
