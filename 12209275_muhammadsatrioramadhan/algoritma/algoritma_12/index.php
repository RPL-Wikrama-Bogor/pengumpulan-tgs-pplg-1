<?php

$hh = 0;
$mm = 0;
$ss = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Jam</td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Input Menit</td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Input Detik</td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit">Hitung</button></td>
            </tr>
        </table>
    </form>
</body>
<?php

if (isset($_POST['submit'])) {
    $hh = $_POST['jam'];
    $mm = $_POST['menit'];
    $ss = $_POST['detik'];

    $ss = $ss + 1;

    if ($ss >= 60) {
        $mm = $mm + 1;
        $ss = 00;
        if ($mm >= 60) {
            $hh = $hh + 1;
            $mm = 00;
            $ss = 00;
            if ($hh >= 24) {
                $hh = 00;
                $mm = 00;
                $ss = 00;
            }
        }
    }
    echo "$hh : $mm : $ss";
}

?>

</html>