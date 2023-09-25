<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Rental Motor</title>
</head>

<body>
    <h1>Form Rental Motor</h1>
    <?php
    // Data pelanggan yang berstatus member
    $members = ['rio'];

    // Data harga motor
    $harga_motor = [
        'scooter' => ['name' => 'Scooter', 'price' => 70000],
        'sport' => ['name' => 'Sport', 'price' => 80000],
        'touring' => ['name' => 'Touring', 'price' => 90000],
        'cross' => ['name' => 'Cross', 'price' => 100000]
    ];

    // Inisialisasi variabel
    $nama_pelanggan = "";
    $lama_rental = "";
    $jenis_motor = "";
    $total_harga = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Ambil data dari formulir
        $nama_pelanggan = strtolower($_POST['nama_pelanggan']);
        $lama_rental = $_POST['lama_rental'];
        $jenis_motor = $_POST['jenis_motor'];

        // Cek apakah pelanggan adalah member
        $is_member = in_array($nama_pelanggan, $members);

        // Hitung harga total
        $harga_per_hari = $harga_motor[$jenis_motor]['price'];
        $total_harga = $is_member ? $harga_per_hari * $lama_rental : ($harga_per_hari + 10000) * $lama_rental;
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Nama Pelanggan:</label>
        <input type="text" name="nama_pelanggan" value="<?php echo $nama_pelanggan; ?>" required><br>
        <label>Lama Waktu Rental (per hari):</label>
        <input type="number" name="lama_rental" value="<?php echo $lama_rental; ?>" required><br>
        <label>Jenis Motor:</label>
        <select name="jenis_motor" required>
            <?php
            foreach ($harga_motor as $key => $motor) {
                echo "<option value='$key' " . ($jenis_motor === $key ? 'selected' : '') . ">" . $motor['name'] . "</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="lanjut">
    </form>

    <?php
    // Tampilkan hasil jika sudah ada
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<div class='result-container'>";
        echo "<h1>Hasil Perhitungan Harga Rental Motor</h1>";
        echo "<p>$nama_pelanggan adalah " . ($is_member ? "member" : "non member") . "</p>";
        echo "<p>Jenis motor yang di rental adalah " . $harga_motor[$jenis_motor]['name'] . " selama $lama_rental hari</p>";
        echo "<p>Harga rental per-hari: Rp " . number_format($harga_per_hari, 0, ',', '.') . "</p>";
        echo "<p>Total yang harus dibayarkan adalah Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
</body>

</html>