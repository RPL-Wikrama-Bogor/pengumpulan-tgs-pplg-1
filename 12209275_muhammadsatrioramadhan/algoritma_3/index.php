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
    <title>Document</title>
</head>

<body>
    <h3>Program Mencari Angka Terbesar Dari 3 Angka</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td><input type="number" name="bil_satu"></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td><input type="number" name="bil_dua"></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td><input type="number" name="bil_tiga"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Hitung</button></td>
            </tr>
        </table>
    </form>
</body>

<?php

if (isset($_POST['submit'])) {
    $bilangan_pertama = $_POST['bil_satu'];
    $bilangan_kedua = $_POST['bil_dua'];
    $bilangan_ketiga = $_POST['bil_tiga'];

    if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
        echo "Bilangan terbesar adalah " . $bilangan_pertama;
    } elseif ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
        echo "Bilangan terbesar adalah " . $bilangan_kedua;
    } elseif ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
        echo "Bilangan terbesar adalah " . $bilangan_ketiga;
    } elseif ($bilangan_pertama == $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
        echo "Bilangan satu dan dua sama besar, dan angka terbesarnya adalah " . $bilangan_pertama;
    } elseif ($bilangan_pertama == $bilangan_ketiga && $bilangan_pertama > $bilangan_kedua) {
        echo "Bilangan satu dan tiga sama besar, dan angka terbesarnya adalah " . $bilangan_pertama;
    } elseif ($bilangan_kedua == $bilangan_ketiga && $bilangan_kedua > $bilangan_pertama) {
        echo "Bilangan dua dan tiga sama besar, dan angka terbesarnya adalah " . $bilangan_kedua;
    } else {
        echo "Semua bilangan sama besar";
    }
}

?>

</html>