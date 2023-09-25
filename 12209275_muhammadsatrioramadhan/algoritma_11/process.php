<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pegawai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Informasi Pegawai</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil kode pegawai dari form
            $employeeCode = $_POST["employee_code"];

            // Validasi panjang kode pegawai
            if (strlen($employeeCode) == 11) {
                // Ekstrak informasi
                $golongan = $employeeCode[0];
                $dd = substr($employeeCode, 1, 2);
                $mm = substr($employeeCode, 3, 2);
                $yyyy = substr($employeeCode, 5, 4);
                $nn = substr($employeeCode, 9);

                // Konversi bulan dari angka ke nama
                $bulan = date("F", mktime(0, 0, 0, $mm, 1, $yyyy));

                // Cetak informasi
                echo "<p>Nomor Golongan: $golongan</p>";
                echo "<p>Tanggal Lahir: $dd-$mm-$yyyy</p>";
                echo "<p>Nomor Urut Pegawai: $nn</p>";
            } else {
                echo "<p>Format kode pegawai tidak valid.</p>";
            }
        }
        ?>
        <a href="index.html">Kembali</a>
    </div>
</body>

</html>