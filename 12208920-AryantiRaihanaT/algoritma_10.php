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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Grade</title>
</head>
<body>
    <h1>Menentukan Grade Berdasarkan Rata-rata Nilai</h1>
    <table>
        <form action="" method="post">
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
                <td><input type="submit" value="Cek Grade" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $nilai_pabp = $_POST['pabp'];
        $nilai_mtk = $_POST['mtk'];
        $nilai_dpk = $_POST['dpk'];

        $rata_rata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;

        if($rata_rata <= 100 && $rata_rata >= 80){
            echo "Grade A";
        }else if($rata_rata < 80 && $rata_rata >= 75){
            echo "Grade B";
        }else if($rata_rata < 75 && $rata_rata >= 65){
            echo "Grade C";
        }else if($rata_rata < 65 && $rata_rata >= 45){
            echo "Grade D";
        }else if($rata_rata < 45 && $rata_rata == 0){
            echo "Grade E";
        }else{
            echo "Angka tidak memenuhi persyaratan";
        }
    }

?>

</html>