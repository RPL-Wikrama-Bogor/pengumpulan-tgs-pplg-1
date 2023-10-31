<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="style.css">
=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
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