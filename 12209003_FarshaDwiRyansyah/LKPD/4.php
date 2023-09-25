<?php
    $tunj;
    $pjk;
    $gaji_bersih;
    $gaji_pokok;
<<<<<<< HEAD:12209472-RatuZahra/4.php
    $nama;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 4</title>
</head>

<body>
<h2>Gaji Karyawan</h2>

<form method="post" action="#">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Gaji Pokok</td>
        <td>:</td>
        <td><input type="number" name="gajipokok"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="submit" value="Cari">
        </td>
      </tr>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    //process memasukkan hasil input variable
    $nama = $_POST['nama'];
    $gaji_pokok = $_POST['gajipokok'];
    //process perhitungan
    $gaji_bersih;
    $tunj;
    $pjk;    
    $tunj = (20 * $gaji_pokok)/100;
    $pjk = (15 * ($gaji_pokok + $tunj ) /100);
    $gaji_bersih = $gaji_pokok + $tunj - $pjk;
    //output
    echo "Nama: $nama<br>"; 
    echo "Tunjangan: $tunj<br>";
    echo "Pajak: $pjk<br>";
    echo "Gaji Bersih: $gaji_bersih<br>";
    
  }
?>
</body>
=======
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
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/4.php
</html>