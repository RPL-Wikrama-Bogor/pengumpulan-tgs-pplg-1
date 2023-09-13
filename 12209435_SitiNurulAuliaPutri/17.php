<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 17</title>
</head>
<body>
    <h1>Mencetak bilangan terbesar, terkecil dan rata-rata dari 20 bilangan</h1>
    <form method="post">
        <?php
        $max_bilangan = 20;
        $counter = 1;

        while ($counter <= $max_bilangan) {
            echo "<label for='bilangan_$counter'>Masukkan bilangan $counter: </label>";
            
            echo "<input type='number' name='bilangan_$counter' id='bilangan_$counter'><br><br>";
            $counter++;
        }
        ?>
        <input type="submit" value="Hitung">
    </form>

</body>
</html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan_terbesar = PHP_INT_MIN;
        $bilangan_terkecil = PHP_INT_MAX;
        $total = 0;
        $bilangan_valid = 0;
        $counter = 1;

        while ($counter <= $max_bilangan) {
            $input_name = "bilangan_$counter";
            if (isset($_POST[$input_name])) {
                $bilangan = (float) $_POST[$input_name];

                if (!empty($bilangan) && is_numeric($bilangan)) {
                    $bilangan_valid++;
                    $total += $bilangan;

                    if ($bilangan > $bilangan_terbesar) {
                        $bilangan_terbesar = $bilangan;
                    }

                    if ($bilangan < $bilangan_terkecil) {
                        $bilangan_terkecil = $bilangan;
                    }
                }
            }
            $counter++;
        }

        if ($bilangan_valid > 0) {
            $rata_rata = $total / $bilangan_valid;
        } else {
            $rata_rata = 0;
        }

        echo "<h2>Hasil Perhitungan</h2>";
        echo "Bilangan terbesar: $bilangan_terbesar<br>";
        echo "Bilangan terkecil: $bilangan_terkecil<br>";
        echo "Rata-rata: $rata_rata<br>";
}
?>