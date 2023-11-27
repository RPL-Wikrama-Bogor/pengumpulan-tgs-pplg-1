<?php
$list_film = [
    [
        "judul" => "One Piece",
        "usiamin" => "17",
        "harga" => "70000"
    ],
    [
        "judul" => "Kuroko no Basket",
        "usiamin" => "7",
        "harga" => "25000"
    ],
    [
        "judul" => "Naruto Shippuden",
        "usiamin" => "13",
        "harga" => "50000"
    ]
];

// Mengecek apakah form telah disubmit
if (isset($_POST['judul_film']) && isset($_POST['usia'])) {
    $judulTerpilih = $_POST['judul_film'];
    $usiaPengguna = $_POST['usia'];

    // Mencari film yang sesuai dengan judul
    $filmTerpilih = null;
    foreach ($list_film as $film) {
        if ($film['judul'] == $judulTerpilih) {
            $filmTerpilih = $film;
            break;
        }
    }

    if ($filmTerpilih) {
        // Memeriksa apakah usia pengguna memenuhi batas usia minimum
        if ($usiaPengguna >= $filmTerpilih['usiamin']) {
            echo "Anda dapat membeli film dengan judul: " . $judulTerpilih;
            echo "<br>Harga film: " . $filmTerpilih['harga'];
        } else {
            echo "Maaf, Anda tidak memenuhi usia minimum untuk membeli film ini.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pilih Judul Film</title>
</head>
<body>
    <h1>Pilih Judul Film</h1>
    
    <form method="post">
        <label for="judul_film">Pilih Judul Film:</label>
        <select id="judul_film" name="judul_film">
        <option hidden>Pilih Film</option>
            <?php
            foreach ($list_film as $film) {
                echo '<option value="' . $film['judul'] . '">' . $film['judul'] . '</option>';
            }
            ?>
        </select>

        <br>

        <label for="usia">Usia Anda:</label>
        <input type="text" id="usia" name="usia" required>

        <br>

        <input type="submit" value="Pilih">
    </form>
</body>
</html>
