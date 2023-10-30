<?php

<<<<<<< HEAD:12209472-RatuZahra/9.php
    $suhu_fahrenheit;
    $suhu_celcius;
=======
$suhu_f;
$suhu_c;

>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/9.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:12209472-RatuZahra/9.php
    <title>Soal 9</title>
</head>
<body>
    <h2>Suhu</h2>

    <form method="post" action="#">
        <table>
            <td>
                <tr> Suhu Fahrenheit </tr>
                <tr>  :  </tr>
                <tr><input type="number" name="suhu_fahrenheit"></tr>
            </td>
            <td>
                <tr> <input type="submit" name="submit" value="Cetak"></tr>
            </td>
        </table>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $suhu_fahrenheit = $_POST['suhu_fahrenheit'];

            $suhu_celcius = 5/9 * ($suhu_fahrenheit - 32);

            if ($suhu_celcius > 300) {
                echo "Suhu anda panas";
            }
            elseif ($suhu_celcius < 250) {
                echo "Suhu anda dingin";
            }
            else {
                echo "Suhu anda normal";
            }
        }
    ?>
    
=======
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

        $suhu_c = $suhu_f / 33.8;

        if($suhu_c > 300){
            echo "panas";
        }elseif($suhu_c > 250){
            echo "dingin";
        }else{
            echo "normal";
        }
    }
    ?>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/9.php
</body>
</html>