<?php

$jam;
$menit;
$detik;
$sisaJam;
$sisaMenit;
$sisaDetik;
$hasil;

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengkonversi Detik</title>
</head>

<body>
    <h1>Mengkonversi Detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Detik</td>
                <td>:</td>
                <td><input type="number" name="detik"></td>
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

if (isset($_POST["submit"])) {
    $detik = $_POST["detik"];

    if ($detik >= 3600) {
        $sisaJam = ($detik % 3600);
        $jam =($sisaJam - $detik) / 3600;
    } elseif ($detik >= 60) {
        $sisaMenit = ($detik % 60);
        $menit =($sisaMenit - $detik) / 60;
    } else {
        $detik;
    }

    echo "$jam jam $menit menit $detik detik";

}


?>