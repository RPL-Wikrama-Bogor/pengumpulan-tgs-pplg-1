<?php

$suhu_f;
$suhu_c;

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

    <label for="">Input suhu Fahrenheit :</label>
    <input type="number" name="suhuf" id="">
<br>
    <input type="submit" value="cari" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $suhu_f = $_POST['suhuf'];

        $suhu_c = ($suhu_f - 32) / 1.8;
        echo "Suhu Celcius : $suhu_c </br>";

        if($suhu_c > 300){
            echo "panas";
        }elseif($suhu_c < 250){
            echo "dingin";
        }else{
            echo "normal";
        }
    }
    ?>
</body>
</html>