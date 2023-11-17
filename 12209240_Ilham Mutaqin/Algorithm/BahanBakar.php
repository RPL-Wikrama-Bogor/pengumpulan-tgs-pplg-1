<?php

class Shell{

  private $harga_SSuper,
          $harga_SVPower,
          $harga_SVPowerDiesel,
          $harga_SVPowerNitro;

  public $jenis,
         $liter,
         $harga;

  protected $total,
            $ppn = 0.1;

  public function setHarga($sSuper, $sVPower, $sVPowerDiesel, $sVPowerNitro){
    $this->harga_SSuper = $sSuper ; 
    $this->harga_SVPower = $sVPower ; 
    $this->harga_SVPowerDiesel = $sVPowerDiesel ; 
    $this->harga_SVPowerNitro = $sVPowerNitro ; 
  }

  public function getHarga(){
    $harga['SSuper'] = $this->harga_SSuper;
    $harga['SVPower'] = $this->harga_SVPower;
    $harga['SVPowerDiesel'] = $this->harga_SVPowerDiesel;
    $harga['SVPowerNitro'] = $this->harga_SVPowerNitro;

    return $harga;
  }
}


class Beli extends Shell{
  public function total(){
    $this->total = $this->getHarga()[$this->jenis] * $this->liter;
    $this->total = $this->total + $this->total * $this->ppn;
  }

  public function cetakBukti(){
    echo "---------------------------------------------------------------- <br>";
    echo "Anda membeli bahan bakar minyak tipe <b>" . $this->jenis . "</b><br>";
    echo "Dengan jumlah : <b>" . $this->liter . " Liter </b><br>";
    echo "Total yang harus anda bayar <b>Rp. " . number_format ($this->total, 0, ',', '.') . "</b><br>";
    echo "----------------------------------------------------------------";
  }
}

?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Study Case Bahan Bakar</title>
  <link rel="stylesheet" href="styleBB.css">
</head>

<body>
  <div class="container">
    <div class="card">
     
      <p>
        <?php
        if (isset($_POST['submit'])) {
          $beli = new Beli();
          $beli->setHarga(15420, 16130, 18310, 16510);
          $beli->jenis = $_POST['jenis'];
          $beli->liter = $_POST['liter'];
          $beli->total();
          $beli->cetakBukti();
        }
        ?>
      </p>
      <form action="" method="post">
        <label for="liter"> Masukan jumlah Liter pembelian </label>
        <input type="number" name="liter" id="liter">
        <label for="jenis"> Pilih jenis bahan bakar</label>
        <select name="jenis" id="jenis">
          <option value="SSuper"> Shell Super </option>
          <option value="SVPower"> Shell V-Power </option>
          <option value="SVPowerDiesel"> Shell V-Power Diesel </option>
          <option value="SVPowerNitro"> Shell V-Power Nitro </option>
        </select>
        <button type="submit" name="submit"> Beli </button>
      </form>
    </div>
  </div>
</body>

</html>