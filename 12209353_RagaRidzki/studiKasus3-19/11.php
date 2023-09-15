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
</head>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
        margin-top: 150px;
    }

    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    .hasil {
        margin-top: 10px;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    table {
        width: 100%;
    }

    table td {
        padding: 5px;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <h1>Kode Pegawai</h1>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Kode Pegawai</td>
                <td> : </td>
                <td><input type="number" name="no_pegawai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="kirim"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $no_pegawai = $_POST['no_pegawai'];
        $length = strlen($no_pegawai);

        if ($length == 11) {
            $no_golongan = substr($no_pegawai, 0, 1);
            $tanggal = substr($no_pegawai, 1, 2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);

            if ($bulan == "01") {
                $bulan = "Januari";
            } elseif ($bulan == "02") {
                $bulan = "Februari";
            } elseif ($bulan == "03") {
                $bulan = "Maret";
            } elseif ($bulan == "04") {
                $bulan = "April";
            } elseif ($bulan == "05") {
                $bulan = "Mei";
            } elseif ($bulan == "06") {
                $bulan = "Juni";
            } elseif ($bulan == "07") {
                $bulan = "Juli";
            } elseif ($bulan == "08") {
                $bulan = "Agustus";
            } elseif ($bulan == "09") {
                $bulan = "September";
            } elseif ($bulan == "10") {
                $bulan = "Oktober";
            } elseif ($bulan == "11") {
                $bulan = "November";
            } elseif ($bulan == "12") {
                $bulan = "Desember";
            } else {
                $bulan = "(error)";
            }

            $tangal_lahir = $tanggal . $bulan . $tahun;

            echo "<br>";
            echo "<div class='hasil'>";
            echo "Golongan  = $no_golongan";
            echo "<br>";
            echo "Tanggal Lahir = $tangal_lahir";
            echo "<br>";
            echo "Nomor Urut  = $no_urutan";
            echo "<br>";
        } else {
            echo "<br>";
            echo "<div class='hasil'>";
            echo "Kode Pegawai Tidak Sesuai";
        }


    }
    ?>
</body>

</html>