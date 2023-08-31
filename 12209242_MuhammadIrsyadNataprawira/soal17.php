<!DOCTYPE html>
<html>
<head>
    <title>Statistik Bilangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Statistik Bilangan</h2>
        <?php
            $min = PHP_INT_MAX;
            $max = PHP_INT_MIN;
            $total = 0;

            for ($i = 1; $i <= 20; $i++) {
                $input = isset($_POST["number$i"]) ? (int)$_POST["number$i"] : 0;
                $min = min($min, $input);
                $max = max($max, $input);
                $total += $input;
            }

            $average = $total / 20;

            echo "<p>Bilangan Terkecil: $min</p>";
            echo "<p>Bilangan Terbesar: $max</p>";
            echo "<p>Rata-rata: $average</p>";
        ?>
        <form method="post">
            <?php
                for ($i = 1; $i <= 20; $i++) {
                    echo "<label for=\"number$i\">Bilangan $i:</label>";
                    echo "<input type=\"number\" name=\"number$i\" required><br>";
                }
            ?>
            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
