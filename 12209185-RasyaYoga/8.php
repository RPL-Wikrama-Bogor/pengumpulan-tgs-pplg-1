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
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="number" name="bil"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php
 if(isset($_POST['submit'])) {
    $bilangan = $_POST['bil'];

    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = ($bilangan / 100) %10;

    echo $satuan. " satuan " . $puluhan . " puluhan " . $ratusan . " ratusan ";
 }
?>
</html>