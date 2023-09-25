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
    <title>Bilangan Bulat</title>
</head>

<body>
    <h1>Bilangan Bulat</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bilangan"></td>
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
    $bilangan = $_POST["bilangan"];

    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10 ) % 10;
    $ratusan = ($bilangan / 100 )% 10;

    echo "$satuan Satuan $puluhan Puluhan $ratusan Ratusan";


}


?>