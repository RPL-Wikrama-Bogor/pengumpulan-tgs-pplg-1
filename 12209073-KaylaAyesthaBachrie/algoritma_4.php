<?php
    $tunj;
    $pjk;
    $gaji_bersih;   
    $gaji_pokok;
    $nama = ""; 
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
        <div style="display: flex;">
            <label for="nama_karyawan">Masukan Nama Karyawan : </label>
            <input type="text" name="nama_karyawan" id="nama_karyawan">
        </div>
        <br>
        <div style="display: flex;">
            <label for="gaji_pokok">Masukan Gaji Karyawan : </label>
            <input type="number" name="gaji_pokok" id="gaji_karyawan">
        </div>
        <br>
        <button type="submit" name="submit">Kirim</button>
        <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama_karyawan'];
        $gaji_pokok = $_POST['gaji_pokok'];

        $tunj = ( 20 * $gaji_pokok ) /100;
        $pjk = ( 15 * ($gaji_pokok + $tunj) /100);
        $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    
        echo "Nama :$nama <br>";
        echo "Tunjangan :$tunj <br>";
        echo "Pajak :$pjk <br>";
        echo "Gaji Bersih :$gaji_bersih <br>";
    } 
?>  