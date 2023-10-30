<?php
    $noPegawai;
    $panjang;
    $noGolongan;
    $tgl;
    $bln;
    $thn;
    $noUrut;
    $tglLhr;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 11</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 700px;
        transition: transform 0.3s;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Kode Pegawai</h2>
            <div class="card-body">
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>Kode Pegawai</td>
                            <td>  :  </td>
                            <td><input type="number" name="noPegawai"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="kirim"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    
    <?php
        if (isset($_POST['submit'])) {
            $noPegawai = $_POST ['noPegawai'];
            $panjang = strlen($noPegawai);

            if ($panjang == 11) {
                $noGolongan = substr($noPegawai, 0, 1);
                $tgl = substr($noPegawai, 1, 2);
                $bln = substr($noPegawai, 3, 2);
                $thn = substr($noPegawai, 5, 4);
                $noUrut = substr($noPegawai, 9, 2);

                if ($bln == "01") {
                    $bln = "Januari";
                }elseif ($bln == "02") {
                    $bln = "Februari";
                }elseif ($bln == "03") {
                    $bln = "Maret";
                }elseif ($bln == "04") {
                    $bln = "April";
                }elseif ($bln == "05") {
                    $bln = "Mei";
                }elseif ($bln == "06") {
                    $bln = "Juni";
                }elseif ($bln == "07") {
                    $bln = "Juli";
                }elseif ($bln == "08") {
                    $bln = "Agustus";
                }elseif ($bln == "09") {
                    $bln = "September";
                }elseif ($bln == "10") {
                    $bln = "Oktober";
                }elseif ($bln == "11") {
                    $bln = "November";
                }elseif ($bln == "12") {
                    $bln = "Desember";
                }else {
                   $bln = "(error)";
                }

                $tglLhr = $tgl. $bln. $thn;
                
                echo "Golongan  = $noGolongan";
                echo "<br>";
                echo "Tanggal Lahir = $tglLhr";
                echo "<br>";
                echo "Nomor Urut  = $noUrut";
                echo "<br>";
            }
            else {
                echo "<br>";
                echo "Kode Pegawai Tidak Sesuai<br>Inputkan 11 Angka Kode Pegawai";
            }


        }
    ?>
</body>
</html>