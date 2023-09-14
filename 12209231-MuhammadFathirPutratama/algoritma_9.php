<?php

$suhu_fahrenheit;
$suhu_celcius;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Suhu</title>
</head>
<body>
    <h1>Menentukan Suhu</h1>
    <form action="" method="post">
    <table>
            <tr>
                <td>Input Suhu Fahrenheit</td>
                <td>:</td>
                <td><input type="number" name="fahren"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php
    if(isset($_POST['submit'])){
        $suhu_fahrenheit = $_POST['fahren'];

        $suhu_celcius = ($suhu_fahrenheit - 32) / 1.8;
        echo "Suhu Celcius = " . $suhu_celcius . "°C" ."</br>";

        if($suhu_celcius > 300){
            echo "Panas";
        }elseif($suhu_celcius < 250){
            echo "Dingin";
        }else{
            echo "Normal";
        }
    }
    ?>
</html>