<<<<<<< HEAD:12209240_IlhamMutaqin/Algorithm/Algorithm_11.php
<?php

$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style11.css">
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td>Input Nomor Pegawai</td>
        <td><input type="number" name="no_pegawai"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>
<?php

if(isset($_POST['submit'])){
  $no_pegawai = $_POST['no_pegawai'];

  if(strlen($no_pegawai) < 11){
    echo "Nomor Pegawai Tidak Sesuai";
  }

  $no_golongan = substr($no_pegawai, 0, 1);
  $tanggal = substr($no_pegawai, 1, 2);
  $bulan = substr($no_pegawai, 3, 2);
  $tahun = substr($no_pegawai, 5, 4);
  $no_urutan = substr($no_pegawai, 9, 2);

  if($bulan == "01"){
    $bulan = "Januari";
  }elseif($bulan == "02"){
    $bulan = "Februari";
  }elseif($bulan == "03"){
    $bulan = "Maret";
  }elseif($bulan == "04"){
    $bulan = "April";
  }elseif($bulan == "05"){
    $bulan = "Mei";
  }elseif($bulan == "06"){
    $bulan = "Juni";
  }elseif($bulan == "07"){
    $bulan = "Juli";
  }elseif($bulan == "08"){
    $bulan = "Agustus";
  }elseif($bulan == "09"){
    $bulan = "September";
  }elseif($bulan == "10"){
    $bulan = "Oktober";
  }elseif($bulan == "11"){
    $bulan = "November";
  }else{
    $bulan = "Desember";
  }

  $tanggal_lahir = $tanggal ." ". $bulan ." ". $tahun;

  echo "No Golongan: $no_golongan <br> Tanggal Lahir: $tanggal_lahir <br> No Urutan: $no_urutan";
}

?>
=======
<?php

$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<<<<<<< HEAD
=======
  <link rel="stylesheet" href="style11.css">
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td>Input Nomor Pegawai</td>
        <td><input type="number" name="no_pegawai"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>
<?php

if(isset($_POST['submit'])){
  $no_pegawai = $_POST['no_pegawai'];

  if(strlen($no_pegawai) < 11){
    echo "Nomor Pegawai Tidak Sesuai";
  }

  $no_golongan = substr($no_pegawai, 0, 1);
  $tanggal = substr($no_pegawai, 1, 2);
  $bulan = substr($no_pegawai, 3, 2);
  $tahun = substr($no_pegawai, 5, 4);
  $no_urutan = substr($no_pegawai, 9, 2);

  if($bulan == "01"){
    $bulan = "Januari";
  }elseif($bulan == "02"){
    $bulan = "Februari";
  }elseif($bulan == "03"){
    $bulan = "Maret";
  }elseif($bulan == "04"){
    $bulan = "April";
  }elseif($bulan == "05"){
    $bulan = "Mei";
  }elseif($bulan == "06"){
    $bulan = "Juni";
  }elseif($bulan == "07"){
    $bulan = "Juli";
  }elseif($bulan == "08"){
    $bulan = "Agustus";
  }elseif($bulan == "09"){
    $bulan = "September";
  }elseif($bulan == "10"){
    $bulan = "Oktober";
  }elseif($bulan == "11"){
    $bulan = "November";
  }else{
    $bulan = "Desember";
  }

  $tanggal_lahir = $tanggal ." ". $bulan ." ". $tahun;

  echo "No Golongan: $no_golongan <br> Tanggal Lahir: $tanggal_lahir <br> No Urutan: $no_urutan";
}

?>
>>>>>>> 88f19cff2dae74cafdb639b4342be33f37eea6d3:12209240_Ilham Mutaqin/Algorithm/Algorithm_11.php
</html>