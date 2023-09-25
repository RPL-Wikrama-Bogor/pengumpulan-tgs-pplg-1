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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaji karyawan</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:
                <td><input type="text" name="nama"></td>
                </td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:
                <td><input type="number" name="gaji"></td>
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
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji'];

        $tunj = (20 * $gaji_pokok)/100;
        $pjk = (15*($gaji_pokok + $tunj))/100;

        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        echo "Nama : ". $nama;
        echo "<br>";
        echo "Tunjangan : ". $tunj;
        echo "<br>";
        echo "Pajak : ". $pjk;
        echo "<br>";
        echo "Gaji bersih : ". $gaji_bersih;
    }
?>

</html>