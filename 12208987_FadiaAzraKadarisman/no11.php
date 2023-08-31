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
    <title>Kode Pegawai</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    h2 {
        color: black;
        text-align: center;
        margin-top: 100px;
    }

    form {
        margin-top: 20px;
        margin-left: 425px;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        text-align: center;
        padding-right: 45px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 400px;
        margin: auto;
    }

    td {
        padding: 8px;
        border: 0px solid #ccc;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: white;
        width: 200px;
        max-width: 100%;
        margin-left: 500px;
    }
</style>

</head>
<body>
    <h2>Kode Pegawai</h2>

    <form method="post" action="#">
        <table class="box">
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

                $tglLhr = $tgl." ". $bln." ". $thn;
                echo "<div class=result>";
                echo "Golongan  : $noGolongan";
                echo "<br>";
                echo "Tanggal Lahir : $tglLhr";
                echo "<br>";
                echo "Nomor Urut  : $noUrut";
                echo "<br>";
                echo "</div>";
            }
            else {
                echo "Kode Pegawai Tidak Sesuai";
            }


        }
    ?>
</body>
</html>