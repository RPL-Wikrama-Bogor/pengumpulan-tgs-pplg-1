<?php
$tunjangan;
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
   <title>Gaji Karyawan</title>
</head>

<body>
   
      <h2> Menentukan gaji karyawan</h2>
   
   
      <form action="" method="post">
         <table>
            <tr>
               <td>Nama</td>
               <td>=</td>
               <td><input type="text" name="nama"></td>
            </tr>
            <tr>
               <td>Gaji Pokok</td>
               <td>=</td>
               <td><input type="number" name="gajiPokok"></td>
            </tr>
            <tr>
               <td>
                  <input type="submit" value="cari" name="submit">
               </td>
            </tr>
      </form>
   
   <?php
   if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $gaji_pokok = $_POST['gajiPokok'];
      $gaji_bersih;
      $tunjangan;
      $pajak;
      $tunjangan = (20 * $gaji_pokok) / 100;
      $pajak = (15 * ($gaji_pokok + $tunj) / 100);
      $gaji_bersih = $gaji_pokok + $tunj - $pjk;
      //output
      echo "Nama: $nama<br>";
      echo "Tunjangan: $tunjangan<br>";
      echo "Pajak: $pajak<br>";
      echo "Gaji Bersih: $gaji_bersih<br>";
   }
   ?>
</body>

</html>