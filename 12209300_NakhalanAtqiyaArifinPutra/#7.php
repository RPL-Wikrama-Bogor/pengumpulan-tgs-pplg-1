<?php

$suhu_fahrentheit;
$suhu_celcius;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suhu fahrentheit to suhu celcius</title>
</head>
<body>
<h1>ahwah</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Suhu fahrentheit</td>
                <td>:</td>
                <td><input type="number" name="sf"></td>
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
    $suhu_fahrentheit = $_POST['sf'];

    $suhu_celcius= $suhu_fahrentheit / 33.8;
    if($suhu_celcius > 300){
        echo "Suhu Panas";
    }else if($suhu_celcius > 250){
        echo "Suhu Dingin";
    }else{
        echo "Suhu Normal";
    }
    }
?>
</body>
</html>