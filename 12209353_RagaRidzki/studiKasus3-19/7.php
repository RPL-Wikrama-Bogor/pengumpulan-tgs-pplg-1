<?php

$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Jeruk</title>
</head>

<body>
    <h1>Toko Jeruk</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Total Gram</td>
                <td>:</td>
                <td><input type="number" name="total_gram"></td>
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

if (isset($_POST["submit"])) {
    $total_gram = $_POST["total_gram"];

    $harga_sebelum = 5 * $total_gram;
    $diskon = (5 * $harga_sebelum) / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "<br>";
    echo "Jumlah Jeruk" . $total_gram;
    echo "<br>";
    echo "Harga: Rp.". $harga_sebelum;
    echo "<br>";
    echo "Diskon: Rp.". $diskon;
    echo "<br>";
    echo "Harga Yang Harus Dibayar: Rp.". $harga_setelah;


}


?>