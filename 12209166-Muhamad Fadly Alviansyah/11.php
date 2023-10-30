<?php
<<<<<<< HEAD

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;
<<<<<<< HEAD

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<<<<<<< HEAD
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
=======
  <link rel="stylesheet" href="style/11.css?v2">
</head>
<body>
  <div class="container">
    <div class="card">

      <h2>Muhamad Fadly Alviansyah</h2>

      <form action="" method="post">
        <label for="no">Input nomor pegawai</label>
        <input type="number" id="no" name="no_pegawai">
        <button type="submit" name="submit">Submit</button>
      </form>

      <?php
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6

if(isset($_POST['submit'])){
  $no_pegawai = $_POST['no_pegawai'];

  if(strlen($no_pegawai) < 11){
    echo "Nomor Pegawai Tidak Sesuai";
  }else{
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

<<<<<<< HEAD
  echo "No Golongan: $no_golongan <br> Tanggal Lahir: $tanggal_lahir <br> No Urutan: $no_urutan";
=======
  echo "No. Golongan: $no_golongan <br> Tanggal Lahir: $tanggal_lahir <br> No. Urutan: $no_urutan";
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
  }

  
}

?>
<<<<<<< HEAD
=======

    </div>
  </div>
</body>

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</html>