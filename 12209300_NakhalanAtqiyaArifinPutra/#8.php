<?php

$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rata_rata;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
<h1>Nilai</h1>
    <form action="" method="post">
        <table>
        <tr>
                <td>Nilai PAIBP</td>
                <td>:</td>
                <td><input type="number" name="pai"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>:</td>
                <td><input type="number" name="mtk"></td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td>:</td>
                <td><input type="number" name="dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td> 
            </tr>
        </table>
    </form>  

    <?php
    if (isset($_POST['submit'])) {
    $nilai_pabp = $_POST['pai'];
    $nilai_mtk = $_POST['mtk'];
    $nilai_dpk = $_POST['dpk'];

        $rata_rata= $nilai_dpk + $nilai_mtk + $nilai_pabp / 3;

        if($rata_rata <=100 &&  $rata_rata >= 80){
            echo "Selamat anda mendapatkan nilai A";
        }else if($rata_rata <= 80 && $rata_rata >= 75){
            echo "Anda mendapatkan nilai B";
        }else if($rata_rata <= 75 && $rata_rata >= 65){
            echo "Anda mendapatkan nilai C";
        }else if($rata_rata <= 65 && $rata_rata >= 45){
            echo "Anda mendapatkan nilai D";
        }else if($rata_rata <= 45 && $rata_rata >= 0){
            echo "Anda mendapatkan nilai E";
        }else{
            echo "Angka yang di inputkan tidak memenuhi syarat";
        }

    }
    ?>
</body>
</html>