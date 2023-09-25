<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $waktu = $_POST["waktu"];
    list($jam, $menit, $detik) = explode(":", $waktu);

    $detik = intval($detik) + 1;
    if ($detik > 59) {
        $detik = 0 . "0";
        $menit = intval($menit) + 1;
        if ($menit > 59) {
            $menit = 0 . "0";
            $jam = intval($jam) + 1;
            if ($jam > 23) {
                $jam = 0 . "0";
            }
        }
    }

    $hasil = $jam . ":" . $menit . ":" . $detik;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Penambahan 1 Detik pada Waktu</title>
<<<<<<< HEAD
</head>

<body>
    <h2>Penambahan 1 Detik pada Waktu</h2>
    <form method="post" action="">
        <label>Masukkan waktu (hh:mm:ss):</label>
        <input type="text" name="waktu" required>
        <button type="submit">Tambah 1 Detik</button>
    </form>

    <?php if (isset($hasil)) : ?>
        <p>Data Waktu: <?php echo $waktu; ?></p>
        <p>Setelah Penambahan 1 detik: <?php echo $hasil; ?></p>
    <?php endif; ?>
</body>

</html>

=======
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            height: 100vh;
        }

        .form-container {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            border-radius: 12px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result-container {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Penambahan 1 Detik pada Waktu</h2>
        <div class="form-container">
            <form method="post" action="">
                <label>Masukkan waktu (hh:mm:ss):</label>
                <input type="text" name="waktu" placeholder="Contoh: 23:59:59" required>
                <button type="submit">Tambah 1 Detik</button>
            </form>
        </div>

        <?php if (isset($hasil)) : ?>
            <div class="result-container">
                <p>Data Waktu: <?php echo $waktu; ?></p>
                <p>Setelah Penambahan 1 detik: <?php echo $hasil; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
