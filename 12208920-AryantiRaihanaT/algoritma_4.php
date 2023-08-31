<?php 

$nama;
$tunj;
$pjk;
$gaji_bersih;
$gaji_pokok;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Karyawan</title>
</head>
<body>
    <h1>Menghitung Gaji Karyawan</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <br>
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
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj = (20*$gaji_pokok)/100;
        $pjk = (15*($gaji_pokok + $tunj))/100;
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        
        echo "Nama Karyawan : $nama <br>";
        echo "Tunjangan : $tunj <br>";
        echo "Pajak : $pjk <br>";
        echo "Gaji Bersih : $gaji_bersih";
    }

?>

</html>