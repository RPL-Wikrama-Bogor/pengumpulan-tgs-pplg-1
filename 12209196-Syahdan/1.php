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
    <title>mencari bilangan terbesar</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan pertama</td>
                <td>:</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Cari"></td> 
            </tr>
        </table>
    </form>
</body>

<?php

    if (isset($_POST['submit'])) {
        $bilangan_pertama =$_POST ['bil_satu'];
        $bilangan_kedua =$_POST ['bil_dua'];
        $bilangan_ketiga =$_POST ['bil_tiga'];
    
    if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
        echo "Bilangan terbesar adalah". $bilangan_pertama;
    }
    else if ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
        echo "Bilangan terbesar adalah". $bilangan_kedua;
    }
    else if ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
        echo "Bilangan terbesar adalah". $bilangan_ketiga;
    }
    else {
        echo "bilangan sama besar";
    }
    }
?>
</html> 