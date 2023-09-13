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
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container">
    <h1>Input!</h1>
<div class="formm">
    <form action="#" method="post">
        
                <label for="kode"><b>kode pegawai :</b></label>
                <br>
                <input type="number" name="no_pegawai" placeholder="input jam...">
            
<br>
<br>

        <button type="submit" name="submit">Kirim!</button>
       
    </form>
    </div>
    </div>
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
  }elseif($bulan == "12"){
    $bulan = "Desember";
  }else{
    $bulan = "Bulan tidak tersedia";
  }

  if($tanggal >= 31){
    $tanggal = "tidak tersedia";
  }

  $tanggal_lahir = $tanggal ." ". $bulan ." ". $tahun;

  echo "No Golongan: $no_golongan <br> Tanggal Lahir: $tanggal_lahir <br> No Urutan: $no_urutan";
}

?>
</html>