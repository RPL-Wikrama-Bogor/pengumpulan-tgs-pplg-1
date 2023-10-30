<?php 
$jam = 0;
$menit = 0;
$detik = 0;
$total = 0;

if (isset($_POST['submit'])) {
    $jam = intval($_POST['jam']);
    $menit = intval($_POST['menit']);
    $detik = intval($_POST['detik']);

    $jam *= 3600;
    $menit *= 60;
    $total = $jam + $menit + $detik;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu ke Detik</title>
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
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        #button:hover {
            background-color: #2980b9;
        }

        h2 {
            margin-top: 20px;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Konversi Waktu ke Detik</h1>
            <form action="" method="post">
                <label for="jam">Masukkan Jam: </label>
                <input type="number" name="jam" placeholder="Jam..." required>
                <label for="menit">Masukkan Menit: </label>
                <input type="number" name="menit" placeholder="Menit..." required>
                <label for="detik">Masukkan Detik: </label>
                <input type="number" name="detik" placeholder="Detik..." required>
                <input type="submit" value="Konversi" id="button" name="submit">
            </form>
            <h2><?php echo $total ?> Detik</h2>
        </div>
    </div>
</body>

</html>
