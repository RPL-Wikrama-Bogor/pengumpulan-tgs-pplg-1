<?php

$jam;
$menit;
$detik;
$total;


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

    <h1>Mengkonversi ke detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:
                <td><input type="number" name="jam"></td>
                </td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:
                <td><input type="number" name="menit"></td>
                </td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:
                <td><input type="number" name="detik"></td>
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
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];

    $jam = $jam * 3600;
    $menit = $menit * 60;
    $total = $jam + $menit + $detik;

    echo "Total detik nya adalah : " . $total;
}
?>

</html>