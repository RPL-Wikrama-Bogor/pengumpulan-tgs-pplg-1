<?php
    $bilangan;
    $satuan;
    $puluhan;
    $ratusan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritma 8</title>
</head>
    <body>
<<<<<<< HEAD
    <h1>Algoritma 8</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bil"></td>
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
 if(isset($_POST['submit'])) {
    $bilangan = $_POST['bil'];
=======
    <form action="" method="post">
    <input type="number" name="bill">
                <input type="submit" value="Cari" name="submit">
                </form>
</body>
<?php
 if(isset($_POST['submit'])) {
    $bilangan = $_POST['bill'];
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6

    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = ($bilangan / 100) %10;

    echo $satuan. " satuan " . $puluhan . " puluhan " . $ratusan . " ratusan ";
 }
?>
</html>