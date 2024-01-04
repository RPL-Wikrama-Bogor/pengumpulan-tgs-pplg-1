<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penambahan waktu </title>
</head>
<body>
    <h1>penambahan waktu 1detik </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>jam</td>
                <td>:</td>
                <td><input type="number" name="hh" placeholder="input jam"></td>
            </tr>
            <tr>
                <td>menit</td>
                <td>:</td>
                <td><input type="number" name="mm" placeholder="input menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="ss" placeholder="input detik"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

$hh;
$mm;
$ss;

if (isset($_POST['submit'])) {
    $hh = $_POST['hh'];
    $mm = $_POST['mm'];
    $ss = $_POST['ss'];

    
        $ss= $ss + 1;
        if($ss >= 60){
            $mm= $mm + 1;
            $ss= 00;
        }
        if($mm >= 60 ){
            $hh= $hh + 1;
            $mm=00;
            $ss=00;
        }
        if($hh >= 24){
            $hh=00;
            $mm=00;
            $ss=00;
        }
        echo "$hh jam ";
        echo "<br>";
        echo "$mm menit";
        echo "<br>";
        echo"$ss detik ";

    }

?>