<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Film</title>
    <style>
        body {
            background-color: cyan; /* Warna latar belakang */
            text-align: center; /* Tengah horizontal */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 24px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        select, input[type="number"], input[type="submit"] {
            margin: 5px;
            padding: 5px;
        }

        p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Formulir Pembelian Ticket Film</h1>

    <form method="POST" action="">
        <label for="judul">Judul Film:</label>
        <select name="judul" id="judul">
            <option value="Doraemon">Doraemon the Movie</option>
            <option value="Galaksi">Galaksi</option>
            <option value="SAO">Sword Art Online</option>
        </select>

        <label for="umur">Umur Anda:</label>
        <input type="number" name="umur" id="umur" required>

        <input type="submit" name="submit" value="Beli Ticket Film">
    </form>

    <?php
    // Cek jika formulir telah disubmit
    if (isset($_POST['submit'])) {
        // Ambil nilai yang dikirimkan oleh formulir
        $selectedJudul = $_POST['judul'];
        $umur = intval($_POST['umur']); // Ubah umur menjadi bilangan bulat

        // Data film
        $filmData = array(
            "Doraemon" => array(
                "harga" => 20000,
                "umur" => 16
            ),
            "Galaksi" => array(
                "harga" => 30000,
                "umur" => 18
            ),
            "SAO" => array(
                "harga" => 25000,
                "umur" => 15
            )
        );  

        // Cek apakah judul yang dipilih ada dalam data film
        if (array_key_exists($selectedJudul, $filmData)) {
            $hargaFilm = $filmData[$selectedJudul]["harga"];

            // Validasi umur sebelum membeli film
            if ($umur >= $filmData[$selectedJudul]["umur"]) {
                echo "<p>Anda telah berhasil membeli ticket film $selectedJudul dengan harga $hargaFilm.</p>";
            } else {
                echo "<p>Maaf, Anda belum cukup umur untuk membeli film $selectedJudul.</p>";
            }
        } else {
            echo "<p>Judul film yang Anda pilih tidak valid.</p>";
        }
    }
    ?>

</body>
</html>