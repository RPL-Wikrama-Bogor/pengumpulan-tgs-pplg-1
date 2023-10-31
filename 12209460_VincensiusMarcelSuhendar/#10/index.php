<?php
$nilai_pabp;
$nilai_mtk;
$nilai_dpk;
$rata_rata;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kejuruan PPLG</title>
</head>
<body>
    <p>Input nilai-nilai anda!</p>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <h4>PABP</h4>
                    <input type="number" name="pabp" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>MTK</h4>
                    <input type="number" name="mtk" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <h4>DPK</h4>
                    <input type="number" name="dpk" id="">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit!"></td>
            </tr>
        </table>
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        $nilai_pabp = $_POST['pabp'];
        $nilai_mtk = $_POST['mtk'];
        $nilai_dpk = $_POST['dpk'];

        $rata_rata = ($nilai_pabp + $nilai_mtk + $nilai_dpk) / 3;
    }
    
    if($rata_rata <= 100 && $rata_rata >= 80){
        echo "A";
    }
    elseif($rata_rata <= 80 && $rata_rata >= 75){
        echo "B";
    }
    elseif($rata_rata <= 75 && $rata_rata >= 65){
        echo "C";
    }
    elseif($rata_rata <= 65 && $rata_rata >= 45){
        echo "D";
    }
    elseif($rata_rata <= 45 && $rata_rata >= 0){
        echo "E";
    }
    else{
        echo "Angka tidak memenuhi persyaratan";
    }

    ?>

</body>
</html>