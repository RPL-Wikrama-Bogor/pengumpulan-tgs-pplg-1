<?php

$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>
</head>
<body>
<h1>Mendapatkan Diskon</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Total Gram</td>
                <td>:</td>
                <td><input type="number" name="t_g"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td> 
            </tr>
        </table>
    </form>  

    <?php
     if (isset($_POST['submit'])) {
       $total_gram = $_POST['t_g'];
     
    $harga_sebelum= 500 * $total_gram;
    $diskon= 5 * $harga_sebelum /100;
    $harga_setelah= $harga_sebelum - $diskon;

        echo "Harga Sebelum :". $harga_sebelum ."<br>";
        echo "Diskon :". $diskon ."<br>";
        echo "Harga Sesudah :". $harga_setelah ."<br>";


    }
     ?>
</body>
</html>