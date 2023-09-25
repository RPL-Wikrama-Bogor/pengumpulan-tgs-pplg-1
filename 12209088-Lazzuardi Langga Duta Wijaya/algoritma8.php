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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td>:
                <td><input type="number" name="bilangan"></td>
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
    if (isset($_POST['submit'])){
        $bilangan = $_POST['bilangan'];

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan/10) % 10;
        $ratusan = ($bilangan/100) % 10;

        echo "bilangan ".$satuan. " satuan";
        echo "<br>";
        echo "bilangan ".$puluhan. " puluhan";
        echo "<br>";
        echo "bilangan ".$ratusan. " ratusan";
    }
?>

</html>