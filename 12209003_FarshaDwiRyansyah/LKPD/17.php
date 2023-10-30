<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD:12209472-RatuZahra/17.php

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak bilangan terbesar, terkecil dan rata-rata dari bilangan</title>
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
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bilangan_terbesar = PHP_INT_MIN;
            $bilangan_terkecil = PHP_INT_MAX;
            $jumlah_bilangan = 0;
            $total_bilangan = 0;

            for ($i = 1; $i <= 20; $i++) {
                $input_name = "bilangan$i";
                $bilangan = (int)$_POST[$input_name];
                $total_bilangan += $bilangan;
                $jumlah_bilangan++;

                if ($bilangan > $bilangan_terbesar) {
                    $bilangan_terbesar = $bilangan;
                }

                if ($bilangan < $bilangan_terkecil) {
                    $bilangan_terkecil = $bilangan;
                }
            }

            $rata_rata = $total_bilangan / $jumlah_bilangan;

            echo "Bilangan terbesar: $bilangan_terbesar<br>";
            echo "Bilangan terkecil: $bilangan_terkecil<br>";
            echo "Rata-rata: $rata_rata<br>";
        }
        ?>

        <p>Masukkan 20 bilangan:</p>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<input type='number' name='bilangan$i' required><br>";
        }
        ?>

        <br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/17.php
