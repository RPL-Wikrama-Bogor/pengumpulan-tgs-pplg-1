<!DOCTYPE html>
<html>

<head>
    <title>Hasil Konversi</title>
</head>

<body>
    <h1>Hasil Konversi</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Langkah 1: Menerima input dari formulir
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        // Langkah 2: Menghitung total detik
        $total = ($jam * 3600) + ($menit * 60) + $detik;

        // Langkah 3: Menampilkan hasil
        echo "Jam: $jam jam<br>";
        echo "Menit: $menit menit<br>";
        echo "Detik: $detik detik<br>";
        echo "Total detik: $total detik";
    }
    ?>
</body>

</html>