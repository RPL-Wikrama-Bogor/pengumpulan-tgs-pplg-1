<html lang="en">
<<<<<<< HEAD
=======

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <style>  
        body {
            font-family: Arial, sans-serif;
            /* background-image: url("https://i.pinimg.com/564x/18/d9/8b/18d98b260b1ff941f0ae77c4a27d52cc.jpg"); */
=======
    <style>
        body {
            font-family: Arial, sans-serif;
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .waktu-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .user-box {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 5px;
        }

        input[type="number"] {
            width: 150px;
        }

        input[type="submit"] {
            background-color: #96B6C5;
            color: black;
            padding: 5px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100px;
        }

<<<<<<< HEAD
        input[type="submit"]:hover {
            background-color: #E1AEFF;
        }
=======

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6

        .output-box {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<<<<<<< HEAD
<body>
    <div class="waktu-box">
<form action="" method="post">
        <table>
        <div class="user-box">
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="hh" id="hh"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mm" id="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="ss" id="ss"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </div>
        </table>
        </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $ss = $_POST['ss'];

    $ss = $ss + 1;

    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;
    }

    if($mm >= 60){
        $hh = $hh + 1;
        $mm = 0;
        $ss = 0;
    }

    if($hh >= 24){
        $hh = 00;
        $mm = 00;
        $ss = 00;
    }

    echo "Jam :" .$hh;
    echo "<br/>";
    echo "Menit :" .$mm;
    echo "<br/>";
    echo "Detik :" .$ss;
    echo "<br/>";

}
=======

<body>
    <div class="waktu-box">
        <form action="" method="post">
            <table>
                <div class="user-box">
                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td><input type="number" name="hh" id="hh"></td>
                    </tr>
                    <tr>
                        <td>Menit</td>
                        <td>:</td>
                        <td><input type="number" name="mm" id="mm"></td>
                    </tr>
                    <tr>
                        <td>Detik</td>
                        <td>:</td>
                        <td><input type="number" name="ss" id="ss"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="cari" name="submit"></td>
                    </tr>
                </div>
            </table>
            <?php
            if (isset($_POST['submit'])) {
                $hh = $_POST['hh'];
                $mm = $_POST['mm'];
                $ss = $_POST['ss'];

                $ss = $ss + 1;

                if ($ss >= 60) {
                    $mm = $mm + 1;
                    $ss = 00;
                }

                if ($mm >= 60) {
                    $hh = $hh + 1;
                    $mm = 0;
                    $ss = 0;
                }

                if ($hh >= 24) {
                    $hh = 00;
                    $mm = 00;
                    $ss = 00;
                }

                echo "Jam :" . $hh;
                echo "<br/>";
                echo "Menit :" . $mm;
                echo "<br/>";
                echo "Detik :" . $ss;
                echo "<br/>";
            }
            ?>
        </form>
    </div>

</body>

</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
