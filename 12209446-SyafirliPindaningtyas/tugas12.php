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
<<<<<<< HEAD
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
=======
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
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
        }

        button[type="submit"] {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
<<<<<<< HEAD
            
        }
=======
            border-radius: 10%;

        }

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
<<<<<<< HEAD
        }

=======
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
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
    </style>

</head>

<body>
    <center>
<<<<<<< HEAD
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
=======
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
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6

            <?php
            if (isset($_POST['submit'])) {
                $hh = $_POST['jm'];
<<<<<<< HEAD
                $mm = $_POST['mn'];
                $ss = $_POST['dt'];
=======
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6


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
<<<<<<< HEAD
            </div>
    </center>
</body>
=======
        </div>
    </center>
</body>

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</html>