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
        $totalDetik = $_POST["totalDetik"];

        // Langkah 2: Menghitung jam, menit, dan detik
        $jam = floor($totalDetik / 3600);
        $totalDetik %= 3600;
        $menit = floor($totalDetik / 60);
        $detik = $totalDetik % 60;

        // Langkah 3: Menampilkan hasil
        echo "Total Detik: $totalDetik detik<br>";
        echo "Jam: $jam jam<br>";
        echo "Menit: $menit menit<br>";
        echo "Detik: $detik detik";
    }
    ?>
</body>

</html>