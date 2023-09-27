<?php
$bilangan = 0;
$satuan = 0;
$puluhan = 0;
$ratusan = 0;

if (isset($_POST['submit'])) {
    $bilangan = intval($_POST['bilangan']);
    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = ($bilangan / 100) % 10;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 8</title>
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
            <h1>Soal 8 - Implementasi Flowchart</h1>
            <form action="" method="post">
                <label for="bilangan">Masukkan Bilangan (bilangan): </label>
                <input type="number" name="bilangan" placeholder="bilangan..." required>
                <input type="submit" value="Konversi" id="button" name="submit">
            </form>
            <h2><?php
                if (isset($_POST['submit'])) {
                    echo "Bilangan Satuan " . $satuan . "<br>";
                    echo "Bilangan Puluhan " . $puluhan . "<br>";
                    echo "Bilangan Ratusan " . $ratusan;
                }
                ?></h2>
        </div>
    </div>
</body>

</html>