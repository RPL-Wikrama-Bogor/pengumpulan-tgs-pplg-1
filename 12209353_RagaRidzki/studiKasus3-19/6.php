<?php

$td;
$j;
$m;
$d;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Konversi Total Detik</title>
</head>

<body>
    <h1>Konversi Total Detik</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Total Detik</td>
                <td>:</td>
                <td><input type="number" name="td"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Konversi" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php

if (isset($_POST['submit'])) {
    $td = $_POST['td'];

    $j = floor($td / 3600);
    $sisa = floor($td % 3600);
    $m = floor($sisa / 60);
    $d = floor($sisa % 60);

    echo "$j Jam $m Menit $d Detik";
}

?>

</html>