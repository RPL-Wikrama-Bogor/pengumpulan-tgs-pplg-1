<?php
class Motor {
    protected $hargaSewa;
    protected $jenisMotor;

    public function __construct($hargaSewa, $jenisMotor) {
        $this->hargaSewa = $hargaSewa;
        $this->jenisMotor = $jenisMotor;
    }

    public function hitungTotal($jumlahHari) {
        return $this->hargaSewa * $jumlahHari;
    }

    public function cetakStruk($namaPelanggan, $memberStatus, $jumlahHari) {
        $diskonText = "";
        $hargaPerHari = $this->hargaSewa;

        if ($memberStatus) {
            $diskonText = " (Diskon 5%)";
        }

        $total = $this->hitungTotal($jumlahHari);
        $discountAmount = 0;

        if ($memberStatus) {
            $discountAmount = ($total * 0.05); 
            $total -= $discountAmount; 
        }

        $tax = 10000; 
        $totalCost = $total + $tax; 

        echo "<h2>Hasil Transaksi:</h2>";
        echo "$namaPelanggan berstatus sebagai " . ($memberStatus ? "Member" : "Non Member") . "<br>";
        echo "Jenis Motor yang dirental adalah {$this->jenisMotor} selama $jumlahHari hari<br>";
        echo "Harga rental per Harinya: Rp. $hargaPerHari<br>";
        echo "Diskon: Rp. $discountAmount<br>"; 
        echo "Pajak: Rp. $tax<br>";
        echo "Total Biaya Sewa (Termasuk pajak & diskon): Rp. $totalCost<br>";
    }
}

class PeminjamanMotor extends Motor {
    public function __construct($jenisMotor, $memberStatus) {
        $hargaSewa = $this->getHargaSewaByMotorType($jenisMotor);
        parent::__construct($hargaSewa, $jenisMotor);
    }

    private function getHargaSewaByMotorType($jenisMotor) {
        $hargaSewaMap = [
            'Scooter' => 200000,
            'Sport'   => 250000,
            'Cross'   => 300000,
            'Ninja'   => 380000,
        ];

        return isset($hargaSewaMap[$jenisMotor]) ? $hargaSewaMap[$jenisMotor] : 0;
    }
}

$transaksi = null; 

if (isset($_POST["submit"])) {
    $namaPelanggan = $_POST["nama"];
    $jenisMotor = $_POST["jenis_motor"];
    $memberStatus = $_POST["status"] == "member";
    $jumlahHari = $_POST["jumlah_hari"];

    $transaksi = new PeminjamanMotor($jenisMotor, $memberStatus);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Peminjaman Motor</title>
</head>
<body>
    <h1>Transaksi Peminjaman Motor</h1>
    <form action="" method="post">
        <label for="nama">Nama Pelanggan:</label>
        <input type="text" name="nama" required><br>

        <label for="jenis_motor">Jenis Motor:</label>
        <select name="jenis_motor" required>
            <option value="Scooter">Scooter</option>
            <option value="Sport">Sport</option>
            <option value="Cross">Cross</option>
            <option value="Ninja">Ninja</option>
        </select><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="member">Member</option>
            <option value="non-member">Non Member</option>
        </select><br>

        <label for="jumlah_hari">Lama Waktu Rental (per hari):</label>
        <input type="number" name="jumlah_hari" required><br>

        <input type="submit" value="Hitung" name="submit">
    </form>

    <?php
    if ($transaksi !== null) {
        $transaksi->cetakStruk($namaPelanggan, $memberStatus, $jumlahHari);
    }
    ?>
</body>
</html>
