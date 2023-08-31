<!DOCTYPE html>
<html>

<head>
    <title>Hasil Cek Cuaca</title>
</head>

<body>
    <h1>Hasil Cek Cuaca</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Langkah 1: Menerima input dari formulir
        $temperaturFahrenheit = $_POST["temperatur"];

        // Langkah 2: Menghitung dalam satuan Celsius
        $temperaturCelsius = ($temperaturFahrenheit - 32) * 5 / 9;

        // Langkah 3: Mengecek cuaca
        if ($temperaturCelsius > 30) {
            echo "Cuaca: Panas";
        } elseif ($temperaturCelsius < 10) {
            echo "Cuaca: Dingin";
        } else {
            echo "Cuaca: Normal";
        }

        echo "<br>";
        echo "Temperatur dalam Fahrenheit: $temperaturFahrenheit °F<br>";
        echo "Temperatur dalam Celsius: $temperaturCelsius °C";
    }
    ?>
</body>

</html>