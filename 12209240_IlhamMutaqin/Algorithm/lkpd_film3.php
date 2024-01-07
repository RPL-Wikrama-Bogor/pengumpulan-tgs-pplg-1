<!DOCTYPE html>
<html>
<head>
    <title>Form Pemilihan Film</title>
</head>
<body>
    <center>
    <h2>Pilih Film dan Masukkan Umur Anda</h2>
    <form method="post" action="">
        <label for="film">Pilih Film:</label>
        <select id="film" name="film">
            <option value="Avengers: Endgame">Avengers: Endgame - Rp 50,000</option>
            <option value="Toy Story 4">Toy Story 4 - Rp 30,000</option>
            <option value="Joker">Joker - Rp 60,000</option>
            <option value="Frozen II">Frozen II - Rp 25,000</option>
            <option value="Inception">Inception - Rp 40,000</option>
        </select>

        <br>

        <label for="umur">Masukkan Umur Anda:</label>
        <input type="number" id="umur" name="umur" required min="0">

        <br><br>

        <input type="submit" name="submit" value="Cek Kelayakan">
    </form>
    
</center>
    <?php
    if (isset($_POST["submit"]) && isset($_POST["film"]) && isset($_POST["umur"])) {
        $umur = intval($_POST["umur"]);

        $daftarFilm = [
            "Avengers: Endgame" => 50000,
            "Toy Story 4" => 30000,
            "Joker" => 60000,
            "Frozen II" => 25000,
            "Inception" => 40000,
        ];

        $filmTerpilih = $_POST["film"];

        if (array_key_exists($filmTerpilih, $daftarFilm)) {
            $hargaFilm = $daftarFilm[$filmTerpilih];

            if ($umur >= 13) {
                echo "Anda dapat menonton film $filmTerpilih. Harga tiket: Rp $hargaFilm. Silakan bayar di loket. Selamat menonton!";
             
               
            } else {
                echo "Maaf, Anda tidak dapat menonton film $filmTerpilih karena batasan umur untuk film ini adalah 16 tahun ke atas.";
            }
        } else {
            echo "Film yang Anda pilih tidak valid.";
        }
    }
    
    ?>
</body>
</html>
