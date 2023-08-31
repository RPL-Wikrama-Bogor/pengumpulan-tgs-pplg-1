<?php 
$jam = 0;
$menit = 0;
$detik = 0;
$waktu = 0;

$hasil = "";

if (isset($_POST['submit'])) {
    $waktu = $_POST['waktu'];

    if ($waktu >= 3600) {
        $jam = floor($waktu / 3600);
        $waktu -= ($jam * 3600);
        $hasil .= $jam . " Jam ";
    }
    if ($waktu >= 60) {
        $menit = floor($waktu / 60);
        $waktu -= ($menit * 60);
        $hasil .= $menit . " Menit ";
    }
    $detik = $waktu;
    $hasil .= $detik . " Detik";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Waktu ke Jam Menit Detik</title>
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
</head>

<body>
    <div class="container">
        <div class="box">
            <h1>Konversi Detik ke Jam Menit Detik</h1>
            <form action="" method="post">
                <label for="waktu">Masukkan Waktu (detik): </label>
                <input type="number" name="waktu" placeholder="Waktu..." required>
                <input type="submit" value="Konversi" id="button" name="submit">
            </form>
            <h2><?php echo $hasil ?></h2>
        </div>
    </div>
</body>

</html>
