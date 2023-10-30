<?php
    $tunj;
    $pjk;
    $gaji_bersih;
    $gaji_pokok;
    $namakaryawan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Gaji Karyawan</title>
</head>
<body>
    <h1>Menentukan Gaji Karyawan</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><input type="number" name="gajpok"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php
    if(isset($_POST['submit'])) {
    $namakaryawan=$_POST['nama'];
    $gaji_pokok=$_POST['gajpok'];
    $tunj = (20 * $gaji_pokok) / 100;
    $pjk = (15 * ($gaji_pokok + $tunj)) / 100;
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    

    echo "Nama: " . $namakaryawan ."<br>" .
     "Gaji Pokok: " . $gaji_pokok . "<br>" .
     "Tunjangan: " . $tunj . "<br>" .
     "Pajak: " . $pjk . "<br>" .
     "Gaji Bersih: " . $gaji_bersih . "<br>";
    }
?>
</html>