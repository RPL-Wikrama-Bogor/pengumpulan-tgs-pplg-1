<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5ff65bc995fc3cead8c306f4e4edf8c23a3b0df8
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
<<<<<<< HEAD
</html>
=======
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h2>Informasi Pegawai</h2>

<form method="post" action="">
    Masukkan Nomor Pegawai (11 karakter): <input type="text" name="nomorPegawai">
    <input type="submit" name="submit" value="Cari">
</form>

<?php
function month($month) {
    switch ($month) {
        case "01":
            return "JANUARI";
        case "02":
            return "FEBRUARI";
        case "03":
            return "MARET";
        case "04":
            return "APRIL";
        case "05":
            return "MEI";
        case "06":
            return "JUNI";
        case "07":
            return "JULI";
        case "08":
            return "AGUSTUS";
        case "09":
            return "SEPTEMBER";
        case "10":
            return "OKTOBER";
        case "11":
            return "NOVEMBER";
        case "12":
            return "DESEMBER";
        default:
            return "Bulan tidak valid";
    }
}

if (isset($_POST['submit'])) {
    $nomorPegawai = $_POST['nomorPegawai'];

    if (strlen($nomorPegawai) == 11) {
        $golongan = $nomorPegawai[0];
        $date = substr($nomorPegawai, 1, 2);
        $month = substr($nomorPegawai, 3, 2);
        $year = substr($nomorPegawai, 5, 4);
        $nomorUrut = substr($nomorPegawai, 9);

        echo "<br>";
        echo "Nomor Golongan: " . $golongan . "<br>";
        echo "Tanggal Lahir: " . $date . " " . month($month) . " " . $year . "<br>";
        echo "Nomor Urut: " . $nomorUrut;
    } else {
        echo "Nomor Pegawai harus terdiri dari 11 karakter.";
    }
}
?>

</body>
</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
>>>>>>> 5ff65bc995fc3cead8c306f4e4edf8c23a3b0df8
