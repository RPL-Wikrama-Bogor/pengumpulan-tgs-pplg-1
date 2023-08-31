<?php
    $fahrenheit;
    $celcius;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suhu</title>
</head>
<body>
<h1>Suhu</h1>
    <form action="" method="post">   
    <table>
            <tr>
                <td>Input Suhu fahrenheit</td>
                <td>:</td>
                <td><input type="number" name="fahrenheit"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
    </table>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $fahrenheit = $_POST['fahrenheit'];
        $celcius = ($fahrenheit - 32) * 5/9;

       if ($celcius > 300) {
        echo "Panas";
       }elseif ($celcius < 250) {
        echo "Dingin";
       }elseif ($celcius < 300 && $celcius > 250) {
        echo "Normal";
       }
    }