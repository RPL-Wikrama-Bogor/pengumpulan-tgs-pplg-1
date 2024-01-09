<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan Ganjil</title>
</head>

<body>
    <h1>Cetak Bilangan Ganjil dari 1 s.d 50 Menggunakan While Loop</h1>
    <ul>
        <?php
        $bilangan = 1;
        while ($bilangan <= 50) {
            if ($bilangan % 2 != 0) {
                echo "<li>$bilangan</li>";
            }
            $bilangan += 2;
        }
        ?>
    </ul>
</body>

</html>