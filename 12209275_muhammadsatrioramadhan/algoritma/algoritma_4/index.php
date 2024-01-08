<?php

$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;
$nama;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Program Untuk Menentukan Gaji Karyawan</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td><input type="text" name="gaji_pokok"></td>
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
    $nama = $_POST['nama'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15 * ($gaji_pokok - $tunj)) / 100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;

    echo "Nama: " . $nama . "<br>";
    echo "Tunjangan: " . number_format($tunj) . "<br>";
    echo "Pajak: " . number_format($pjk) . "<br>";
    echo "Gaji Bersih: " . number_format($gaji_bersih) . "<br>";
}


?>

</html>