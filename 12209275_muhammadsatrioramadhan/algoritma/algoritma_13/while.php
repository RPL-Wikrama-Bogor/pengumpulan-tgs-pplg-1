<!DOCTYPE html>
<html>

<head>
    <title>Cetak Bilangan</title>
</head>

<body>
    <h1>Cetak Bilangan 1 s.d 50 Menggunakan While Loop</h1>
    <ul>
        <?php
        $i = 1;
        while ($i <= 50) {
            echo "<li>$i</li>";
            $i++;
        }
        ?>
    </ul>
</body>

</html>