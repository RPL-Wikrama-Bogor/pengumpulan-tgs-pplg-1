<?php

$suhu_fahrenheit;
$suhu_celcius;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indikator Suhu</title>
</head>

<body>
    <h1>Indikator Suhu</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Suhu Fahrenheit</td>
                <td>:</td>
                <td><input type="type" name="suhu_fahrenheit"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php 

if(isset($_POST["submit"])) {
    $suhu_fahrenheit = $_POST["suhu_fahrenheit"];

    $suhu_celcius = ($suhu_fahrenheit - 32) / 1.8 ;

    if ($suhu_celcius > 300) {
        echo "Suhu Panas";
    } elseif ($suhu_celcius > 250) {
        echo "Suhu Dingin";
    } else {
        echo "Suhu Normal";
    }
}



?>