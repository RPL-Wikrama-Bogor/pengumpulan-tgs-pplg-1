<!DOCTYPE html>
<html>
<head>
    <title>Hitung Bilangan</title>
</head>
<body>
    <h1>Hitung Bilangan</h1>
    <form method="POST">
        <?php
        $jumlah_bilangan = 20;
        for ($i = 1; $i <= $jumlah_bilangan; $i++) {
            echo "Bilangan ke-$i: <input type='number' name='bilangan[]'><br>";
            echo "----------------------------------------------------------- <br>";
        }
        ?>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan = $_POST["bilangan"];


        $terbesar = max($bilangan);
        $terkecil = min($bilangan);
        $total = array_sum($bilangan);
        $rata_rata = $total / $jumlah_bilangan;

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Bilangan Terbesar: $terbesar<br>";
        echo "Bilangan Terkecil: $terkecil<br>";
        echo "Rata-rata: $rata_rata<br>";
    }
    ?>
</body>
</html>