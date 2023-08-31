<?php

    $tg;
    $hsd;
    $hs;
    $d;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari harga</title>
</head>
<body>
    <h1>Mencari harga</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Berat</td>
                <td>:</td>
                <td><input type="number" name="TG" placeholder="Input berat gram"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $tg = $_POST['TG'];

    $hs = 500 * $tg;
    $d = 5 * $hs / 100;
    $hsd = $hs - $d;

echo "Harga sebelum diskon = ". $hs;
echo "<br>";
echo "Harga diskon = ". $d;
echo "<br>";
echo "Harga setelah diskon = ". $hsd;
echo "<br>";

}

?>