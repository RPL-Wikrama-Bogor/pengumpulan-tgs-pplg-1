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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: radial-gradient(#D2DAFF, #EEF1FF, #AAC4FF);
            margin: 0;
            padding: 20px;
        }
        


        .card {
            border: 0px;
            max-width: 700px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #D2DAFF;
            box-shadow: 20px;
        }

        button[type="submit"] {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;

        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            box-shadow: 20px;
        }

        label {
            font-size: 20px;
        }

        @media screen and (max-width: 768px) {
            .card {
                margin-left: 40px;
                margin-right: 30px;
                padding: 10px;
            }
        }
    </style>

</head>

<body>
    <center>
        <div class="card">
            <h1>Masukan data</h1>
            <hr>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="">Jam</label></td>
                        <td> <input type="number" name="jm" id="jm"></td>
                    </tr>
                    <tr>
                        <td><label for="">Menit</label></td>
                        <td><input type="number" name="mm" id="mm"></td>
                    </tr>
                    <tr>
                        <td><label for="">Detik</label></td>
                        <td><input type="number" name="ss" id="ss"></td>
                    </tr>
                    <tr>

                        <td><button type="submit" name="submit" value="hitung">Hitung</button></td>
                    </tr>
                </table>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $hh = $_POST['jm'];
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];


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