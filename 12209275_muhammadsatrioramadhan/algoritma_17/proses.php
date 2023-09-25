<!DOCTYPE html>
<html>

<head>
    <title>Hasil Statistik Bilangan</title>
</head>

<body>
    <h1>Hasil Statistik Bilangan</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan_terbesar = -INF;
        $bilangan_terkecil = INF;
        $total = 0;

        for ($i = 1; $i <= 20; $i++) {
            $input_name = "bilangan_$i";
            if (isset($_POST[$input_name])) {
                $bilangan = $_POST[$input_name];
                $total += $bilangan;
                if ($bilangan > $bilangan_terbesar) {
                    $bilangan_terbesar = $bilangan;
                }
                if ($bilangan < $bilangan_terkecil) {
                    $bilangan_terkecil = $bilangan;
                }
            }
        }

        $rata_rata = $total / 20;

        echo "Bilangan Terbesar: $bilangan_terbesar<br>";
        echo "Bilangan Terkecil: $bilangan_terkecil<br>";
        echo "Rata-rata: $rata_rata";
    }
    ?>
</body>

</html>