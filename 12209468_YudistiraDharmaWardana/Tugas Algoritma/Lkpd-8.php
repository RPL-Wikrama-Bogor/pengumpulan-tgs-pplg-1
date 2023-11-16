<?php

$bilangan;
$satuan;
$puluhan;
$ratusan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Lkpd Algoritma 8 </h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Input Bilangan</td>
            <td>:</td>  
            <td><input type="text" name ="blg"></td>
        </tr>
    </table>

    <button name="submit" method="post">Kirim</button>
</form> 

</body>
</html>

<?php


if(isset($_POST['submit'])){

$bilangan = $_POST['blg'];

$satuan = $bilangan % 10;
$puluhan = ($bilangan /10) % 10;
$ratusan = ($bilangan / 100) % 10;

echo "satuan " . $satuan ," puluhan " .$puluhan , " ratusan " .$ratusan;


}