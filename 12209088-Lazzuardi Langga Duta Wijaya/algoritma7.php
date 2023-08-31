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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Total Gram</td>
                <td>:
                <td><input type="number" name="total"></td>
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
if (isset($_POST['submit'])) {
    $total_gram = $_POST['total'];

    $harga_sebelum = 500 * $total_gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "harga sebelum diskon : " . $harga_sebelum;
    echo "<br>";
    echo "diskon sebesar : " . $diskon;
    echo "<br>";
    echo "harga setelah diskon : " . $harga_setelah;
}

?>

</html>