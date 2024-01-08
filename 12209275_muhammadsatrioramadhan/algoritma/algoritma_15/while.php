<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan Genap</title>
</head>

<body>
    <h1>Cetak Bilangan Genap dari 2 s.d 50 Menggunakan While Loop</h1>
    <ul>
        <?php
        $bilangan = 2;
        while ($bilangan <= 50) {
            echo "<li>$bilangan</li>";
            $bilangan += 2;
        }
        ?>
    </ul>
</body>

</html>