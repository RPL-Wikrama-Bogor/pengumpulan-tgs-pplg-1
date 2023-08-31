<?php

$waktu;
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
    <h1>Konversi jam, menit, detik</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Waktu</td>
                <td>:
                <td><input type="number" name="waktu"></td>
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
    $waktu = $_POST['waktu'];

    // if ($waktu > 3600) {
    //     $jam = $waktu / 3600;
    //     $waktu = $waktu - ($jam * 3600);
    //     $hasil += $jam;
    //     $hasil = $hasil + $jam;
    // } else if ($waktu > 60) {
    //     $menit = $waktu / 60;
    //     $waktu = $waktu - ($menit * 60);
    //     $hasil += $menit;
    //     $hasil = $hasil + $menit;
    // } else {
    //     $detik = $waktu;
    //     $hasil += $detik;
    //     $hasil = $hasil + $detik;
    // }

    $jam = $waktu / 3600;
    $waktu %= $jam * 3600;
    $menit = 
    

    echo "Maka hasilnya adalah : " . $hasil;
}

// hasil += jam
// hasil = hasil + jam

?>

</html>