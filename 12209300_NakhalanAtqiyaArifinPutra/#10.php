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
</head>
<body>
<h1>Masukan data</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jm"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mn"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="dt"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td> 
            </tr>

            <?php
    if (isset($_POST['submit'])) {
    $hh = $_POST['jm'];
    $mm = $_POST['mn'];
    $ss = $_POST['dt'];

    
        $ss= $ss + 1;
        if($ss >= 60){
            $mm= $mm + 1;
            $ss= 00;
        }if($mm >= 60 ){
            $hh= $hh + 1;
            $mm=00;
            $ss=00;
        }if($hh >= 24){
            $hh=00;
            $mm=00;
            $ss=00;
        }
        echo "$hh jam $mm menit $ss detik ";

    }
    ?>
</body>
</html>