<?php

$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rataRata;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td>:
                <td><input type="number" name="pabp"></td>
                </td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>:
                <td><input type="number" name="mtk"></td>
                </td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td>:
                <td><input type="number" name="dpk"></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php 

    if (isset($_POST['submit'])){
        $nilai_pabp = $_POST["pabp"];
        $nilai_mtk = $_POST["mtk"];
        $nilai_dpk = $_POST["dpk"];

        $rataRata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;
        if($rataRata <= 100 && $rataRata >=80){
            echo "A";
        } else if ($rataRata <= 80 && $rataRata >= 75){
            echo "B";
        } else if ($rataRata <= 75 && $rataRata >= 65){
            echo "C";
        } else if ($rataRata <= 65 && $rataRata >= 45){
            echo "D";
        } else if ($rataRata <= 45 && $rataRata >= 0){
            echo "E";
        } else {
            echo "Angka tidak memenuhi persyaratan";
        }
    }

?>

</html>