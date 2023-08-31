<style>
    label{
        color: #4477CE;
    }
</style>

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
    <title>Gaji Karyawan</title>
</head>
<body>
    <h1>Menentukan <label>Gaji Karyawan</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji_Pokok</td>
                <td>:</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $gaji_pokok = $_POST['gaji'];

    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15 *($gaji_pokok + $tunj)) / 100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;

    echo $nama ." : ". "<br>".
         "Tunjangan = ".$tunj. "<br>".
         "Pajak = ".$pjk. "<br>".
         "Gaji Bersih = ".$gaji_bersih;
}
?>


</html>