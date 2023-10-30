<?php

$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;    
$nama;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari dana pekerjaan</title>
</head>
<body>
    
<h1>Pekerjaan</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><input type="text" name="nma"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><input type="number" name="gaji_p"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Cari"></td> 
            </tr>
        </table>
    </form>

    <?php
 if (isset($_POST['submit'])) {
    $nama = $_POST['nma'];
    $gaji_pokok = $_POST['gaji_p'];

    $tunj=(20 * $gaji_pokok) / 100;
    $pjk=(15 *($gaji_pokok + $tunj)) / 100;
    $gaji_bersih= $gaji_pokok + $tunj - $pjk;
    
    echo "Nama :" . $nama."<br>";
    echo "Tunjangan :" . $tunj."<br>";
    echo "Pajak :" . $pjk."<br>";
    echo "Gaji Bersih :" . $gaji_bersih ."<br>";
 }
    ?>


</body>
</html>