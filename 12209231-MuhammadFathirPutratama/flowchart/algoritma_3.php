<?php 

    $bil_satu;
    $bil_dua;
    $bil_tiga;

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
                <td><input type="number" name="bil1"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td>:</td>
                <td><input type="number" name="bil2"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil3"></td>
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

    if (isset($_POST['submit'])) {
        $bil_satu = $_POST['bil1'];
        $bil_dua = $_POST['bil2'];
        $bil_tiga = $_POST['bil3'];

        if ($bil_satu > $bil_dua && $bil_satu > $bil_tiga) {
        echo "Bilangan terbesar adalah " . $bil_satu;
        }
        else if ($bil_dua > $bil_satu && $bil_dua > $bil_tiga) {
        echo "Bilangan terbesar adalah " . $bil_dua;
        }
        else if ($bil_tiga > $bil_satu && $bil_tiga > $bil_dua){
        echo "Bilangan terbesar adalah " . $bil_tiga;
        }
        else if ($bil_satu == $bil_dua && $bil_tiga < $bil_satu){
        echo "Bilangan pertama dan kedua sama besar yaitu " . $bil_satu;
        }
        else if ($bil_satu == $bil_tiga && $bil_dua < $bil_satu){
        echo "Bilangan pertama dan ketiga sama besar yaitu " . $bil_tiga;
        }
        else if ($bil_tiga == $bil_dua && $bil_satu < $bil_tiga){
        echo "Bilangan kedua dan ketiga sama besar yaitu " . $bil_dua;
        }
        else {
        echo "Yang tertinggi sama besar";
        }
    }

?>
</html>