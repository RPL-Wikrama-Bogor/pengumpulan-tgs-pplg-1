<?php

$suhu_fahrenheit;
$suhu_celcius;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Suhu Fahrenheit</td>
                <td>:
                <td><input type="number" name="fahrenheit"></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php 

if (isset($_POST['submit'])){
    $suhu_fahrenheit = $_POST["fahrenheit"];

    $suhu_celcius = $suhu_fahrenheit / 33.8;
    if($suhu_celcius > 300){
        echo "panas";
    } else if($suhu_celcius > 250){
        echo "dingin";
    } else {
        echo "normal";
    }
}

?>

</html>