<?php
error_reporting(0);
class MotorRental {
    protected $namaPelanggan;
    protected $lamaWaktuPerHari;
    protected $jenisMotor;
    protected $statusMember;
    private $hargaPerHari = 70000;
    private $pajakPerHari = 10000;

    public function __construct($namaPelanggan, $lamaWaktuPerHari, $jenisMotor, $statusMember) {
        $this->namaPelanggan = $namaPelanggan;
        $this->lamaWaktuPerHari = $lamaWaktuPerHari;
        $this->jenisMotor = $jenisMotor;
        $this->statusMember = $statusMember;
    }

    public function hitungHargaRental() {
        return $this->hargaPerHari + $this->pajakPerHari;
    }

    public function hitungTotalBayar() {
        return $this->hitungHargaRental() * $this->lamaWaktuPerHari;
    }

    public function tampilkanInfoRental() {
        $statusMember = $this->statusMember ? "member" : "non member";
        echo "$this->namaPelanggan berstatus sebagai $statusMember";
        echo "<br>";
        echo "Jenis motor yang di rental adalah : $this->jenisMotor selama $this->lamaWaktuPerHari hari";
        echo "<br>";
        echo "Harga rental per harinya: " . $this->hargaPerHari;
        echo "<br><br>";
        echo "Total yang harus dibayarkan adalah: Rp." . number_format($this->hitungTotalBayar(), 0, ',', '.');
    }
}


// Inisialisasi variabel
$namaPelanggan = "";
$lamaWaktuPerHari = "";
$jenisMotor = "";


?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Rental Motor</title>
</head>
<body>
    <h1>Form Rental Motor</h1>
    <form method="post" action="">
        <label for="namaPelanggan">Nama Pelanggan:</label>
        <input type="text" name="namaPelanggan" value="" required><br><br>

        <label for="lamaWaktuPerHari">Lama Waktu per Hari (dalam hari):</label>
        <input type="number" name="lamaWaktuPerHari" value="" required><br><br>

        <label for="jenisMotor">Jenis Motor:</label>
        <select name="jenisMotor" required>
            <option value="motorsport">Motorsport</option>
            <option value="motorcross">Motorcross</option>
            <option value="scooter">Scooter</option>
            <option value="motortouring">Motortouring</option>
        </select><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>
</html>

<?php 

        
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaPelanggan = $_POST["namaPelanggan"];
        $lamaWaktuPerHari = $_POST["lamaWaktuPerHari"];
        $jenisMotor = $_POST["jenisMotor"];

        $statusMemberArray = [
            "Dina" => "Member",
            "Agus" => "Member",
        ];

        $statusMember = $statusMemberArray[$namaPelanggan];

        $motorRental = new MotorRental($namaPelanggan, $lamaWaktuPerHari, $jenisMotor, $statusMember);

        echo "<h2>Hasil Perhitungan:</h2>";
        $motorRental->tampilkanInfoRental();
    }

?>
