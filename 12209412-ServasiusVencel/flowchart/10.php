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
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for="">Input Nilai PABP :</label>
    <input type="number" name="pabp" id="">

    <br>

    <label for="">Input Nilai MTK :</label>
    <input type="number" name="mtk" id="">

    <br>

    <label for="">Input Nilai DPK :</label>
    <input type="number" name="dpk" id="">

    <br>

    <input type="submit" value="cari" name="submit">


    </form>

    <?php
    if(isset($_POST['submit'])){
        $nilai_pabp = $_POST['pabp'];
        $nilai_mtk = $_POST['mtk'];
        $nilai_dpk = $_POST['dpk'];

        $rata_rata = ($nilai_dpk + $nilai_mtk + $nilai_pabp) / 3;
        echo $rata_rata. " / Grade : ";

        if($rata_rata <=  100 && $rata_rata >= 80){
            echo "A";
        }else if($rata_rata <= 80 && $rata_rata >= 75){
            echo "B";
        }else if($rata_rata <= 75 && $rata_rata >= 65){
            echo "C";
        }else if($rata_rata <= 65 && $rata_rata >= 45){
            echo "D";
        }else if($rata_rata <= 45 && $rata_rata >= 0){
            echo "E";
        }else{
            echo "angka tidak memenuhi persyaratan";
        }
    }
    ?>
</body>
</html>