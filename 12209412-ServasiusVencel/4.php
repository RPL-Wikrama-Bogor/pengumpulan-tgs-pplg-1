<?php
$tunj;
$pajak;
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
    <form action="" method="post">

    <label for="">Nama : </label>
    <input type="text" name="nama" id="">

    <br>

    <label for="">Gaji Pokok : </label>
    <input type="number" name="gajipokok" id="">
    
    <br>

    <input type="submit" value="cari" name="submit">

    </form>
<br>
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $gaji_pokok = $_POST['gajipokok'];

        $tunj = (20 * $gaji_pokok) / 100;
        $pajak = (15 * ($gaji_pokok + $tunj)) / 100;
        $gaji_bersih = $gaji_pokok + $tunj - $pajak;

        echo "Nama      : $nama </br>";
        echo "Tunjangan : $tunj </br>";
        echo "pajak     : $pajak </br>";
        echo "Gaji bersih     : $gaji_bersih </br>";
    }
    ?>
</body>
</html>