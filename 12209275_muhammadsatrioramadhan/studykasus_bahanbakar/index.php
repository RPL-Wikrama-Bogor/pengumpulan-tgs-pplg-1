<?php

// Definisikan kelas Shell
class Shell
{
    // Properti harga untuk berbagai jenis bahan bakar
    private $harga_SSuper,
        $harga_SVPower,
        $harga_SVPowerDiesel,
        $harga_SVPowerNitro;

    // Properti jenis, liter, dan harga yang dapat diakses secara publik
    public $jenis,
        $liter,
        $harga;

    // Properti total dan ppn yang hanya dapat diakses oleh kelas ini dan kelas turunannya
    protected $total,
        $ppn = 0.1;

    // Metode untuk mengatur harga bahan bakar
    public function setHarga($sSuper, $sVPower, $sVPowerDiesel, $sVPowerNitro)
    {
        $this->harga_SSuper = $sSuper;
        $this->harga_SVPower = $sVPower;
        $this->harga_SVPowerDiesel = $sVPowerDiesel;
        $this->harga_SVPowerNitro = $sVPowerNitro;
    }

    // Metode untuk mendapatkan harga bahan bakar
    public function getHarga()
    {
        $harga['SSuper'] = $this->harga_SSuper;
        $harga['SVPower'] = $this->harga_SVPower;
        $harga['SVPowerDiesel'] = $this->harga_SVPowerDiesel;
        $harga['SVPowerNitro'] = $this->harga_SVPowerNitro;

        return $harga;
    }
}

// Definisikan kelas Beli yang merupakan turunan dari kelas Shell
class Beli extends Shell
{
    // Metode untuk menghitung total harga pembelian
    public function total()
    {
        $this->total = $this->getHarga()[$this->jenis] * $this->liter;
        $this->total = $this->total + $this->total * $this->ppn;
    }

    // Metode untuk mencetak bukti pembelian
    public function cetakBukti()
    {
        echo "---------------------------------------------------------------- <br>";
        echo "Anda membeli bahan bakar minyak tipe <b>" . $this->jenis . "</b><br>";
        echo "Dengan jumlah : <b>" . $this->liter . " Liter </b><br>";
        echo "Total yang harus anda bayar <b>Rp. " . number_format($this->total, 0, ',', '.') . "</b><br>";
        echo "----------------------------------------------------------------";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Case Bahan Bakar</title>
    <link rel="stylesheet" href="style/bahanBakar.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Bahan Bakar</h2>
            <p>
                <?php
                // Cek apakah formulir telah disubmit
                if (isset($_POST['submit'])) {
                    // Buat objek dari kelas Beli
                    $beli = new Beli();
                    // Set harga-harga bahan bakar
                    $beli->setHarga(15420, 16130, 18310, 16510);
                    // Ambil jenis dan liter dari formulir
                    $beli->jenis = $_POST['jenis'];
                    $beli->liter = $_POST['liter'];
                    // Hitung total harga pembelian
                    $beli->total();
                    // Cetak bukti pembelian
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