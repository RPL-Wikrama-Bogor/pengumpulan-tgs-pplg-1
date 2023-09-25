<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan Ganjil dan Genap</title>
</head>

<body>
    <h1>Cetak Bilangan Ganjil dan Genap dari 1 s.d 50 Menggunakan For Loop</h1>
    <ul>
        <?php
        $tipe = "ganjil";
        for ($bilangan = 1; $bilangan <= 50; $bilangan++) {
            echo "<li>$bilangan ($tipe)</li>";
            if ($tipe == "ganjil") {
                $tipe = "genap";
            } else {
                $tipe = "ganjil";
            }
        }
        ?>
    </ul>
</body>

</html>