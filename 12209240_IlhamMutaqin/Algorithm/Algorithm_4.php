<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table>
   <tr>
    <td><label for="nama">Nama Karyawan :</label></td>
    <td><input type="text" name="nama" required><br></td>
    
   <td><label for="gaji_pokok">Gaji Pokok :</label></td>
   <td><input type="number" name="gaji_pokok" required></td>
    
    <td><input type="submit" name="submit" value="Hitung"></td>
    </tr>
    </table>
</form>
</body>
<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj = 0.2 * $gaji_pokok;
        $pjk = 0.15 * ($gaji_pokok + $tunj);
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;

        echo "<h2>Hasil Perhitungan</h2>";
        echo "Nama Karyawan: " . $nama . "<br>";
        echo "Tunjangan: " . $tunj . "<br>";
        echo "Pajak: " . $pjk . "<br>";
        echo "Gaji Bersih: " . $gaji_bersih . "<br>";
    }
    ?>
</html>