<?php
$suhuFahrenheit = 0;
$suhuCelcius = "";

if (isset($_POST['submit'])) {
    $suhuFahrenheit = $_POST['suhuFahrenheit'];

    $suhuCelcius = $suhuFahrenheit / 33.8;

    if ($suhuCelcius > 30) {
        $cuaca = "Panas";
    } else if ($suhuCelcius < 10) {
        $cuaca = "Dingin";
    } else {
        $cuaca = "Normal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
</head>
<style>
    html,
    body,
    :root {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .box {
        background-color: #444;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        width: 300px;
        color: white;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    label {
        margin-top: 10px;
    }

    input {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    #button {
        margin-top: 10px;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        background-color: #3448db;
        color: white;
        cursor: pointer;
    }

    #button:hover {
        background-color: #2990b9;
    }

    h2 {
        margin-top: 20px;
        font-size: 24px;
    }
</style>

<body>
    <div class="container">
        <div class="box">
            <h1>Konversi Suhu Fahrenheit ke Celcius</h1>
            <form action="" method="post">
                <label for="suhuFahrenheit">Masukkan Suhu Fahrenheit: </label>
                <input type="number" step="any" name="suhuFahrenheit" placeholder="Fahrenheit..." required>
                <input type="submit" value="Konversi" id="button" name="submit">
            </form>

            <?php if (isset($_POST['submit'])) : ?>
                <h2>Suhu Celcius: <?php echo number_format($suhuCelcius, 2) ?>°C</h2>
                <h2>Cuaca: <?php echo $cuaca ?></h2>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>