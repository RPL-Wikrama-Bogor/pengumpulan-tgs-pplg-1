<style>
    label{
        color: #4477CE;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Temperatur Dari Fahrenheit ke Celcius</title>
</head>
<body>
    <center>
    <h1>Perkiraan <label>Temperatur</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Temperatur</td>
                <td>:</td>
                <td><input type="number" name="suhu"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Tentukan"></td>
            </tr>
        </table>
    </form>
    
    <?php
    
    if (isset($_POST['submit'])) {
        $suhu_fahrenheit = $_POST['suhu'];

        $suhu_celcius = ($suhu_fahrenheit - 32) / 1.8;
        echo "Suhu Celcius = $suhu_celcius ℃ <br>";

        if ($suhu_celcius >= 300) {
            echo "Panas";
        }
        elseif ($suhu_celcius >= 250) {
            echo "Sedang";
        }
        elseif ($suhu_celcius < 250) {
            echo "Dingin";
        }
        
    }
    
    ?>
    </center>
</body>