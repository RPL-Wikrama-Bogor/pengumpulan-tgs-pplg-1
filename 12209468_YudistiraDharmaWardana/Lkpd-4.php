<?php

$tunjangan;
$pajak;
$gaji_bersih;
$gaji_pokok;
$nama;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lkpd Algoritma 4 </h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name ="nama"></td>
        </tr>
        <tr>
            <td>Gaji Pokok </td>
            <td>:</td>
            <td><input type="text" name ="g_p"></td>
        </tr>
    </table>

    <button name="submit" method="post">Kirim</button>
</form>    

    
</body>
</html>

<?php

if(isset($_POST["submit"])){

$nama = $_POST['nama'];
$gaji_pokok = $_POST['g_p'];


$tunjangan = (20 * $gaji_pokok)/100;
$pajak = (15* ($gaji_pokok + $tunjangan))/100;
$gaji_bersih = $gaji_pokok + $tunjangan - $pajak;   


echo $nama ." : " , "<br>",
"tunjangan = ".$tunjangan, "<br>",
"pajak = " .$pajak, "<br>", 
"gaji bersih = " .$gaji_bersih;

}
