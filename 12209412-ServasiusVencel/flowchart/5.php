<?php
$jam;
$menit;
$detik;
$total;
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

        <label for=""> Total Jam :</label>
        <input type="number" name="jam" id="">

        <br>

        <label for=""> Total Menit :</label>
        <input type="number" name="menit" id="">

        <br>

        <label for=""> Total Detik :</label>
        <input type="number" name="detik" id="">

        <br>
        <input type="submit" value="cari" name="submit">
    </form>

    <?php

    if(isset($_POST['submit'])){
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam = $jam * 3600;
        $menit = $menit * 60;
        $detik = $detik;

        $total = $jam + $menit + $detik;

        echo "$total detik";
    }

    ?>
</body>
</html>