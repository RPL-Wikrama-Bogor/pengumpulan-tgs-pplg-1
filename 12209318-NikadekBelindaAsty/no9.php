<?php
$suhu_fahrenheit;
$suhu_celcius;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nomor 9</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Suhu fahrenheit</td> : </td>
                <td></td>
                <td><input type="number" name="renheit"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table><br>
    </form>
<?php
if(isset($_POST['submit'])){
    $suhu_fahrenheit = $_POST['renheit'];
    $suhu_celcius = ($suhu_fahrenheit - 32) * 5/9;

    if($suhu_celcius > 300){
        echo "Panas";
    }elseif($suhu_celcius < 250){
        echo "Dingin";
    }elseif($suhu_celcius < 300 && $suhu_celcius > 250){
        echo "Normal";
    }
       

}
?>
</body>
</html>