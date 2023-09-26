<?php
class RentalMotor
{
    // Array yang berisi daftar member
    private $members = ['rio'];

    // Daftar harga motor
    private $harga_motor = [
        'scooter' => ['name' => 'Scooter', 'price' => 70000],
        'sport' => ['name' => 'Sport', 'price' => 80000],
        'touring' => ['name' => 'Touring', 'price' => 90000],
        'cross' => ['name' => 'Cross', 'price' => 100000]
    ];

    // Properti untuk menyimpan data dari form
    private $nama_pelanggan = "";
    private $lama_rental = "";
    private $jenis_motor = "";
    private $total_harga = "";
    private $is_member = false; // Properti tambahan untuk menyimpan status member
    private $harga_per_hari = 0; // Properti tambahan untuk menyimpan harga per hari

    // Konstruktor untuk meng-handle form jika metode adalah POST
    public function __construct()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->handleForm();
        }
    }

    // Menampilkan form rental motor
    public function displayForm()
    {
        echo "<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' href='style.css'>
    <title>Rental Motor</title>
</head>

<body>
    <h1>Form Rental Motor</h1>
    <form method='POST' action='" . $_SERVER["PHP_SELF"] . "'>
        <label>Nama Pelanggan:</label>
        <input type='text' name='nama_pelanggan' value='" . $this->nama_pelanggan . "' required><br>
        <label>Lama Waktu Rental (per hari):</label>
        <input type='number' name='lama_rental' value='" . $this->lama_rental . "' required><br>
        <label>Jenis Motor:</label>
        <select name='jenis_motor' required>";

        // Membuat pilihan untuk jenis motor berdasarkan harga_motor
        foreach ($this->harga_motor as $key => $motor) {
            echo "<option value='$key' " . ($this->jenis_motor === $key ? 'selected' : '') . ">" . $motor['name'] . "</option>";
        }

        echo "</select><br>
        <input type='submit' value='lanjut'>
    </form>";

        // Memanggil displayResult() untuk menampilkan hasil perhitungan
        $this->displayResult();
        echo "</body>
</html>";
    }

    // Meng-handle data yang dikirimkan melalui form
    private function handleForm()
    {
        $this->nama_pelanggan = strtolower($_POST['nama_pelanggan']);
        $this->lama_rental = $_POST['lama_rental'];
        $this->jenis_motor = $_POST['jenis_motor'];
        $this->is_member = in_array($this->nama_pelanggan, $this->members);
        $this->harga_per_hari = $this->harga_motor[$this->jenis_motor]['price'];

        // Menghitung total harga berdasarkan status member
        $this->total_harga = $this->is_member ? $this->harga_per_hari * $this->lama_rental : ($this->harga_per_hari + 10000) * $this->lama_rental;
    }

    // Menampilkan hasil perhitungan
    private function displayResult()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo "<div class='result-container'>";
            echo "<h1>Hasil Perhitungan Harga Rental Motor</h1>";
            echo "<p>" . $this->nama_pelanggan . " adalah " . ($this->is_member ? "member" : "non member") . "</p>";
            echo "<p>Jenis motor yang di rental adalah " . $this->harga_motor[$this->jenis_motor]['name'] . " selama " . $this->lama_rental . " hari</p>";
            echo "<p>Harga rental per-hari: Rp " . number_format($this->harga_per_hari) . "</p>";
            echo "<p>Total yang harus dibayarkan adalah Rp " . number_format($this->total_harga) . "</p>";
            echo "</div>";
        }
    }
}

// Membuat instance dari RentalMotor
$rentalMotor = new RentalMotor();

// Menampilkan form rental motor
$rentalMotor->displayForm();
