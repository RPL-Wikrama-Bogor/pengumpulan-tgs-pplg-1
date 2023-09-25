<?php

    $bil;
    $satuan;
    $puluhan;
    $ratusan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari nilai bilangan</title>
</head>
<body>
    <h1>mencari nilai bilangan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bil" placeholder="input bilangan"></td>
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
    $bil = $_POST['bil'];
    
    $satuan = $bil % 10;
    $puluhan = ($bil / 10) % 10;
    $ratusan = $bil / 100;

    echo $ratusan . "ratusan";
    echo "<br>";
    echo $puluhan . "puluhan";
    echo "<br>";
    echo $satuan . "Satuan";
    echo "<br>";

}

?>