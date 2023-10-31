<!DOCTYPE html>
<html>

<head>
    <title>Statistik Bilangan</title>
</head>

<body>
    <h1>Statistik Bilangan dari 20 Bilangan</h1>

    <form action="proses.php" method="post">
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<label for='bilangan_$i'>Bilangan $i:</label>";
            echo "<input type='number' name='bilangan_$i' id='bilangan_$i' required><br>";
        }
        ?>
        <input type="submit" value="Hitung">
    </form>
</body>

</html>