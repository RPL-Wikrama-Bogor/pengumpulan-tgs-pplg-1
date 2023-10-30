<?php

    $bilangan_pertama;
    $bilangan_kedua;
    $bilangan_ketiga;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Bilangan Terbesar</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td>:</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_tiga"></td>
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
        $bilangan_pertama = $_POST['bil_satu'];
        $bilangan_kedua = $_POST['bil_dua'];
        $bilangan_ketiga = $_POST['bil_tiga'];
    

    if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
        echo "Bilangan terbesar adalah " . $bilangan_pertama;
    } elseif ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
        echo "Bilangan terbesar adalah " . $bilangan_kedua;
    } elseif ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
        echo "Bilangan terbesar adalah " . $bilangan_ketiga;
    } elseif ($bilangan_pertama == $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga){
        echo "Bilangan 1 dan 2 sama besar, bilangan yang tertinggi adalah ". $bilangan_pertama;
    } elseif ($bilangan_kedua == $bilangan_ketiga && $bilangan_kedua > $bilangan_pertama){
        echo "Bilangan 2 dan 3 sama besar, bilangan yang tertinggi adalah ". $bilangan_kedua;
    } elseif ($bilangan_ketiga == $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua){
        echo "Bilangan 3 dan 1 sama besar, bilangan yang tertinggi adalah ". $bilangan_ketiga;
    }  else {
        echo "Bilangan sama besar";
    }

    }

?>

</html>