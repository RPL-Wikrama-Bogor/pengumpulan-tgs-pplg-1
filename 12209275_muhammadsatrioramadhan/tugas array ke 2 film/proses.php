<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Hasil Pilihan</title>
</head>

<body>
    <?php
    $filmArray = ["doraemon", "spongebob", "wrong turn", "jigsaw"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $film = $_POST["film"];
        $usia = $_POST["usia"];

        if (in_array($film, $filmArray)) {
            if (($film == "doraemon" || $film == "spongebob") && $usia > 1) {
                echo "Silahkan masuk dan bayar tiket 45.000 Rupiah.";
            } elseif (($film == "wrong turn" || $film == "jigsaw") && $usia > 17) {
                echo "Silahkan masuk dan bayar tiket 70.000 Rupiah.";
            } else {
                echo "Maaf, usia Anda belum cukup. Silahkan pilih film lain.";
            }
        } else {
            echo "Film tidak valid. Silahkan pilih film yang lain.";
        }
    }
    ?>

    <br><br>
    <button onclick="window.location.href='index.php'">Kembali</button>
</body>

</html>