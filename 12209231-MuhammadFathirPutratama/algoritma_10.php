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
    <title>Mencari Rata" Nilai</title>
</head>
<body>
    <h1>Mencari Rata" Nilai</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td>:</td>
                <td><input type="number" name="pabp"></td>
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
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php
 if(isset($_POST['submit'])) {
    $nilai_pabp = $_POST['pabp'];
    $nilai_mtk = $_POST['mtk'];
    $nilai_dpk = $_POST['dpk'];

    $rata_rata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;
    echo $rata_rata . " / ";
    if($rata_rata <= 100 && $rata_rata >= 80){
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
        echo "Angka tidak memenuhi persyaratan";
    }
 }
    ?>
</html>