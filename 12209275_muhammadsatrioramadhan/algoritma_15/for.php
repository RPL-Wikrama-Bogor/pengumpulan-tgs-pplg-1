<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan Genap</title>
</head>

<body>
    <h1>Cetak Bilangan Genap dari 2 s.d 50 Menggunakan For Loop</h1>
    <ul>
        <?php
        for ($bilangan = 2; $bilangan <= 50; $bilangan += 2) {
            echo "<li>$bilangan</li>";
        }
        ?>
    </ul>
</body>

</html>