<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan Ganjil dan Genap</title>
</head>

<body>
    <h1>Cetak Bilangan Ganjil dan Genap dari 1 s.d 50 Menggunakan While Loop</h1>
    <ul>
        <?php
        $bilangan = 1;
        $tipe = "ganjil";
        while ($bilangan <= 50) {
            echo "<li>$bilangan ($tipe)</li>";
            if ($tipe == "ganjil") {
                $tipe = "genap";
            } else {
                $tipe = "ganjil";
            }
            $bilangan++;
        }
        ?>
    </ul>
</body>

</html>