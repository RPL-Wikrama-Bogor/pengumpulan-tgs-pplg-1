<?php

$suhu_fahrenheit = 0 ;
$suhu_celcius = 0 ;

if (isset($_POST['submit'])) {
    $suhu_fahrenheit = $_POST["suhu"];
    $suhu_celcius = $suhu_fahrenheit / 33.8;


}

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
                <td>Input Suhu</td>
                <td><input type="text" name="suhu"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html> 

<?php
if ($suhu_celcius > 30) {
        echo "panas <br>";
    } elseif ($suhu_celcius < 25) {
        echo "dingin <br>";
    }else {
        echo "normal <br>";
    }

    ?>