<?php

$hh;
$mm;
$ss;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah 1 detik</title>
    <style>
         body{
            background-color:gainsboro;
        }

        .card{
            border: 0px;
            width: 550px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #AAC4FF;
        }

        button[type="submit"] {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

    </style>

</head>

<body>
    <center>
    <div class="card">
    <h1>Masukan data</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jm" id="jm"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mm" id="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="dt" id="dt"></td>
            </tr>
            <tr>

                <button type="submit" name="submit" value="hitung">Hitung</button>
            </tr>
        </table>
</form>

            <?php
            if (isset($_POST['submit'])) {
                $hh = $_POST['jm'];
                $mm = $_POST['mn'];
                $ss = $_POST['dt'];


                $ss = $ss + 1;
                if ($ss >= 60) {
                    $mm = $mm + 1;
                    $ss = 00;
                }
                if ($mm >= 60) {
                    $hh = $hh + 1;
                    $mm = 00;
                    $ss = 00;
                }
                if ($hh >= 24) {
                    $hh = 00;
                    $mm = 00;
                    $ss = 00;
                }
                echo "$hh jam $mm menit $ss detik </h3> ";
            }
            ?>
            </div>
    </center>
</body>
</html>