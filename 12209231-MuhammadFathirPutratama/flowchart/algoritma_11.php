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
  <title>Kode Pegawai</title>
  <style>
  body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
      color: #343a40;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      font-size: 14px;
      margin-bottom: 15px;
    }

    button[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <form method="post">
  <h1 style="text-align: center;">Menentukan Kode Pegawai</h1>
    <input type="text" id="no_pegawai" name="nopegawai" placeholder="Input No Pegawai">
    
    <button type="submit" name="submit">Submit</button>
    
  </form>

</body>
<?php

if(isset($_POST['submit'])){
  $no_pegawai = $_POST['nopegawai'];

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
  }
  else{
    $bulan = "Error";
  }

  $tanggal_lahir = $tanggal ." ". $bulan ." ". $tahun;
  
  echo "No Golongan: $no_golongan <br> Tanggal Lahir: $tanggal_lahir <br> No Urutan: $no_urutan";
}

?>
</html>