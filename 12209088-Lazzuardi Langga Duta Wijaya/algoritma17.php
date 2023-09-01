<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>


<body>

    <h2>Input</h2>

    <form method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "Bilangan ke-$i: <input type='number' name='bilangan[]'><br>";
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];

        $jumlahBilangan = count($bilangan);
        if ($jumlahBilangan == 0) {
            echo "Belum ada bilangan yang diinput.";
        } else {
            $terbesar = $bilangan[0];
            $terkecil = $bilangan[0];
            $total = 0;

            foreach ($bilangan as $bil) {
                if ($bil > $terbesar) {
                    $terbesar = $bil;
                }
                if ($bil < $terkecil) {
                    $terkecil = $bil;
                }
                $total += $bil;
            }

            $rataRata = $total / $jumlahBilangan;

            echo "<h2>Hasil:</h2>";
            echo "Bilangan Terbesar: $terbesar<br>";
            echo "Bilangan Terkecil: $terkecil<br>";
            echo "Rata-rata: $rataRata<br>";
        }
    }
    ?>

</body>

</html>