<?php
$klarifikasi = [
    [
        "judul" => "fastX",
        "umur" => 17,
        "harga" => "35000",
    ],
    [
        "judul" => "barbie",
        "umur" => 13,
        "harga" => "50000",
    ],
    [
        "judul" => "avatar",
        "umur" => "13",
        "harga" => "35000",
    ],
];

$pesan = "";

if (isset($_POST['submit'])) {
    $umur = isset($_POST['umur']) ? intval($_POST['umur']) : 0;
    $judulFilm = isset($_POST['movie']) ? $_POST['movie'] : "";

    foreach ($klarifikasi as $film) {
        if ($film['judul'] === $judulFilm) {
            if ($umur >= $film['umur']) {
                $pesan = "Silahkan bayar " . $film['harga'] . " untuk menonton " . $film['judul'];
            } else {
                $pesan = "Belum cukup umur untuk menonton " . $film['judul'];
            } 
            break;
        }
    }

    if (empty($pesan)) {
        $pesan = "Film tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>buy tickets here </h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="number" name="umur"></td>
            </tr>
            <tr>
                <td>Movie</td>
                <td>:</td>
                <td> <select name="movie">
                        <option value="">Pilih Film</option>
                        <?php foreach ($klarifikasi as $film) : ?>
                            <option value="<?php echo $film['judul']; ?>"><?php echo $film['judul']; ?></option>
                        <?php endforeach; ?>
                    </select></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
    <p><?php echo $pesan; ?></p>
</body>
</html>
