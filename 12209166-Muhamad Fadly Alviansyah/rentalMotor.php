<?php

class Motor{

  private $hargaScooter,
          $hargaSportTouring,
          $hargaSport,
          $hargaCross;

  public $jenis,
         $waktu,
         $nama;

  protected $total,
            $status,
            $harga,
            $pajak = 10000,
            $diskon = 0.1;
             
  public function setHarga($scooter, $sportTouring, $sport, $cross){
    $this->hargaScooter = $scooter ; 
    $this->hargaSportTouring = $sportTouring ; 
    $this->hargaSport = $sport ;
    $this->hargaCross = $cross ; 
  }

  public function getHarga(){
    $this->harga['scooter'] = $this->hargaScooter;
    $this->harga['sportTouring'] = $this->hargaSportTouring;
    $this->harga['sport'] = $this->hargaSport;
    $this->harga['cross'] = $this->hargaCross;
  
    return $this->harga;
  }
}

class Beli extends Motor{
  public function getStatus(){
    if(in_array($this->nama, ['Dina', 'Fadly', 'Leli'])){
      $this->status = 'Member';
    }else{
      $this->status = 'Non Member';
    }

    return $this->status;
  }

  public function total(){
    if($this->getStatus() == 'Member'){
      $this->total = $this->getHarga()[$this->jenis] * $this->waktu;
      $this->total = $this->total - ($this->total * $this->diskon) + $this->pajak;
    }else{
      $this->total = $this->getHarga()[$this->jenis] * $this->waktu + $this->pajak;
    }

    return $this->total;
  }
  
  public function cetakBukti(){
    echo "<p><b>" . $this->nama . "</b> berstatus sebagai <b>"  . $this->getStatus() . "</b><br>";
    echo "Jenis motor yang dirental adalah <b style='text-transform : capitalize;'>" . $this->jenis . "</b> selama <b>" . $this->waktu . " hari </b><br>";
    echo "Harga rental per-harinya adalah <b>Rp. " . number_format($this->getHarga()[$this->jenis], 0, ',', '.') . "</b><br>";
    echo "Total yang harus anda bayar <b>Rp. " . number_format ($this->total(), 0, ',', '.') . "</b></p>";
  }
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study Case Bahan Bakar</title>
  <link rel="stylesheet" href="style/rentalMotor.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <h2>Muhamad Fadly Alviansyah</h2>
        <?php
        if (isset($_POST['submit'])) {
          $beli = new Beli();
          $beli->setHarga(70000, 250000, 200000, 150000);
          $beli->jenis = $_POST['jenis'];
          $beli->waktu = $_POST['waktu'];
          $beli->nama = $_POST['nama'];
          $beli->total();
          $beli->cetakBukti();
        }
        ?>
      <form action="" method="post">
        <label for="nama">Nama pelanggan</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="waktu">Lama waktu rental (hari)</label>
        <input type="number" name="waktu" id="waktu" required min=1 value=1>
        <br>
        <label for="jenis">Pilih jenis motor</label>
        <select name="jenis" id="jenis" required>
          <option value="" disabled selected>---PILIH OPSI---</option>
          <option value="scooter"> Scooter </option>
          <option value="sportTouring"> Sport Touring </option>
          <option value="sport"> Sport </option>
          <option value="cross"> Cross </option>
        </select>
        <button type="submit" name="submit"> Submit </button>
      </form>
    </div>
  </div>
</body>

</html>