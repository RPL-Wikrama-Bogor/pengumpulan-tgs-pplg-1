<?php
 
$suhu_f;
$suhu_c;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<<<<<<< HEAD
<h1>Lkpd Algoritma 8 </h1>
=======
<h1>Lkpd Algoritma 9 </h1>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
<form action="" method="post">
    <table>
        <tr>
            <td>Input suhu farenheit</td>
            <td>:</td>
            <td><input type="text" name ="shf"></td>
        </tr>
    </table>

    <button name="submit" method="post">Kirim</button>
</form> 

    
</body>
</html>

<?php

if(isset($_POST['submit'])){

$suhu_f = $_POST['shf'];

if($suhu_f >= 300){
    $suhu_c = $suhu_f /33.8;
    echo "Suhu Tergolong Panas";
}
elseif($suhu_f >=250){
    $suhu_c = $suhu_f /33.8;
    echo"Suhu Tergolong dingin";
}
else{
    $suhu_c = $suhu_f /33.8;
    echo"suhu tergolong normal";
}

}