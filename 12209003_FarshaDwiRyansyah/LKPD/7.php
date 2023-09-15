<?php

    $total_gram;
    $harga_sebelum;
    $diskon;
    $harga_setelah;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="" method="post">

    <label for="">Input total gram :</label>
    <input type="number" name="total" id="">

    <br>
    <input type="submit" value="cari" name="submit">
   </form>

   <?php
    if(isset($_POST['submit'])){
        $total_gram = $_POST['total'];

        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "Harga sebelum :$harga_sebelum </br>";
        echo "diskon        :$diskon </br>";
        echo "Harga Setelah :$harga_setelah </br>";
    }
   ?>
</body>
</html>