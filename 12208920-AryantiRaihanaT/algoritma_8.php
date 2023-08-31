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
    <title>Satuan Puluhan Ratusan</title>
</head>
<body>
    <h1>Satuan Puluhan Ratusan</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bilangan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cek" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = ($bilangan / 100) % 10;

        echo "$satuan Satuan ";
        echo "$puluhan Puluhan ";
        echo "$ratusan Ratusan";
    }

?>

</html>