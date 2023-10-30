<?php

$nama;
$gaji_pokok;
$tunj;
$pjk;
$gaji_bersih;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
</head>

<body>
    <h1>Gaji Karyawan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><input type="type" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><input type="number" name="gaji_pokok"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $gaji_pokok = $_POST["gaji_pokok"];

    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15 * ($gaji_pokok + $tunj ) / 100);
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;

    echo "<br>";
    echo "Nama Karyawan " . $nama;
    echo "<br>";
    echo "Tunjangan = Rp." . $tunj;
    echo "<br>";
    echo "Pajak = Rp." . $pjk;
    echo "<br>";
    echo "Gaji Bersih = Rp." . $gaji_bersih;


}



?>