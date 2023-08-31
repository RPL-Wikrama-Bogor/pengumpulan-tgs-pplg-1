<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan Ganjil</title>
</head>

<body>
    <h1>Cetak Bilangan Ganjil dari 1 s.d 50 Menggunakan For Loop</h1>
    <ul>
        <?php
        for ($bilangan = 1; $bilangan <= 50; $bilangan += 2) {
            echo "<li>$bilangan</li>";
        }
        ?>
    </ul>
</body>

</html>