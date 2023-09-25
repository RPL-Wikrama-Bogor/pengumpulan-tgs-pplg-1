<?php 

$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rata_rata

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Nilai</title>
</head>
<body>
    <h1>Mencari Nilai</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Nilai PABP</td>
                <td>:</td>
                <td><input type="number" name="nilai_pabp"></td>
            </tr>
            <tr>
                <td>Input Nilai MTK</td>
                <td>:</td>
                <td><input type="number" name="nilai_mtk"></td>
            </tr>
            <tr>
                <td>Input Nilai DPK</td>
                <td>:</td>
                <td><input type="number" name="nilai_dpk"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php

if(isset($_POST["submit"])) {
    $nilai_pabp = $_POST['nilai_pabp'];
    $nilai_mtk = $_POST['nilai_mtk'];
    $nilai_dpk = $_POST['nilai_dpk'];

    $rata_rata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;

    if($rata_rata <= 100 && $rata_rata >= 80) {
        Echo "Rata Rata = $rata_rata, Nilai A";
    } elseif ($rata_rata <= 80 && $rata_rata >=75) {
        echo "Rata Rata = $rata_rata, Nilai B";
    } elseif ($rata_rata <= 75 && $rata_rata >= 65) {
        echo "Rata Rata = $rata_rata, Nilai C";
    } elseif ($rata_rata <= 65 && $rata_rata >= 45) {
        echo "Rata Rata = $rata_rata, Nilai D";
    } elseif ($rata_rata <= 45 && $rata_rata >= 0) {
        echo "Rata Rata = $rata_rata, Nilai E";
    } else {
        echo "Angka tidak memenuhi persyaratan";
    }

}






?>