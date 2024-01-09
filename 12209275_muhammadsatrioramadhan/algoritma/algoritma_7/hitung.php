<!DOCTYPE html>
<html>

<head>
    <title>Hasil Perhitungan</title>
</head>

<body>
    <h1>Hasil Perhitungan</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Langkah 1: Menerima input dari formulir
        $berat = $_POST["berat"];

        // Langkah 2: Menghitung harga sebelum diskon
        $harga_per_100_gram = 500; // 500 rupiah per 100 gram
        $harga_sebelum_diskon = ($berat / 100) * $harga_per_100_gram;

        // Langkah 3: Menghitung diskon
        $diskon = 0.05 * $harga_sebelum_diskon; // 5% dari harga sebelum diskon

        // Langkah 4: Menghitung harga setelah diskon
        $harga_setelah_diskon = $harga_sebelum_diskon - $diskon;

        // Langkah 5: Menampilkan hasil
        echo "Berat Buah Jeruk: $berat gram<br>";
        echo "Harga Sebelum Diskon: " . number_format($harga_sebelum_diskon, 0, ",", ".") . " rupiah<br>";
        echo "Diskon: " . number_format($diskon, 0, ",", ".") . " rupiah<br>";
        echo "Harga Setelah Diskon: " . number_format($harga_setelah_diskon, 0, ",", ".") . " rupiah";
    }
    ?>
</body>

</html>