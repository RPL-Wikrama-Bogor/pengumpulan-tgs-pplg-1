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
    <title>Konversi Suhu</title>
</head>
<body>
    <h1>Konversi Suhu</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Suhu Fahrenheit</td>
                <td>:</td>
                <td><input type="number" name="fahrenheit"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cek Suhu" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $suhu_fahrenheit = $_POST['fahrenheit'];

        $suhu_celcius = $suhu_fahrenheit / 33.8;
        // $suhu_celcius = ($suhu_fahrenheit - 32) * 5/9;

        if($suhu_celcius > 300){
            echo "Panas";
        }else if($suhu_celcius < 250){
            echo "Dingin";
        }else{
            echo "Normal";
        }
    }

?>

</html>