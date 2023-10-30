<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/19.css">
</head>
<body>
  <div class="container">
    <div class="card">

    <h2>Muhamad Fadly Alviansyah</h2>

    <form action="" method="post">
      <label for="vip">Input penjualan tiket VIP</label>
      <input type="number" name="vip" id="vip"required>
      <label for="eks">Input penjualan tiket Eksekutif</label>
      <input type="number" name="eksekutif" id="eks" required>
      <label for="eko">Input penjualan tiket Ekonomi</label>
      <input type="number" name="ekonomi" id="eko" required>
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php

$tiketVip = 50;
$tiketEksekutif = 50;
$tiketEkonomi = 50;

if(isset($_POST['submit'])){
  $vip = $_POST['vip'];
  $eksekutif = $_POST['eksekutif'];
  $ekonomi = $_POST['ekonomi'];

  if($vip >= 35 && $vip <=50){
    $untungVip = 25;
  }elseif($vip >= 20 && $vip < 35){
    $untungVip = 15;
  }elseif($vip < 20 && $vip > 0){
    $untungVip = 5;
  }else{
    echo "Tidak Valid";
  }

  if($eksekutif >= 40 && $eksekutif <=50){
    $untungEksekutif = 20;
  }elseif($eksekutif >= 20 && $eksekutif < 40){
    $untungEksekutif = 10;
  }elseif($eksekutif < 20 && $eksekutif > 0){
    $untungEksekutif = 2;
  }else{
    echo "Tidak Valid";
  }

  if($ekonomi > 0 && $ekonomi <= 50){
    $untungEkonomi = 7;
  }else{
    echo "Tidak Valid";
  }

  echo "Keuntungan tiket VIP = " . $untungVip . "% <br>";
  echo "Keuntungan tiket Eksekutif = " . $untungEksekutif . "% <br>";
  echo "Keuntungan tiket Ekonomi = " . $untungEkonomi . "% <br>";
  echo "Keuntungan keseluruhan = " . $untungVip + $untungEksekutif + $untungEkonomi . "% <br>";
  echo "Jumlah tiket VIP = " . $vip . "<br>";
  echo "Jumlah tiket Eksekutif = " . $eksekutif . "<br>";
  echo "Jumlah tiket Ekonomi = " . $ekonomi . "<br>";
  echo "Jumlah keseluruhan tiket = " . $vip + $eksekutif + $ekonomi;
}

?>
    </div>
  </div>
</body>
</html>

