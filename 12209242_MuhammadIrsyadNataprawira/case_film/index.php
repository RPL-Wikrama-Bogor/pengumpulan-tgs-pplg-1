<?php

$listFilm = [
    [
        'judul' => 'Miracle In Cell',
        'minUsia' => 15,
        'harga' => 45_000
    ],
    [
        'judul' => 'The Invitation',
        'minUsia' => 17,
        'harga' => 35_000
    ],
    [
        'judul' => 'Luck',
        'minUsia' => 7,
        'harga' => 35_000
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XOP Bioskop</title>
</head>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    input[type="number"] {
        padding: 2px 4px ;
    }

    input[type='submit'] {
        margin-top: 10px;
    }
</style>

<body>

    <div class="container">
        <h2>Pilih Film</h2>
        <form action="" method="post">
            <label for="">Usia: </label><br>
            <input type="number" name="usia" placeholder="Input Usia..." required><br>
            <label for="">List Film: </label><br>
            <select name="film">
                <option value="" selected>---Pilih Film---</option>
                <?php foreach ($listFilm as $movie) : ?>
                    <option value="<?= $movie['judul'] ?>"><?= $movie['judul'], " || Usia " . $movie['minUsia'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>


        <?php
        if (isset($_POST['submit'])) {
            $usia = $_POST['usia'];
            $film = $_POST['film'];
            if ($usia <= 0) {
                echo "<script>alert('Masukan Umur Yang Benar.')</script>";
            } elseif (empty($film)) {
                echo "<script>alert('Silahkan Pilih Film.')</script>";
            } else {
                $selectedFilm = '';
                foreach ($listFilm as $movie) {
                    if ($movie['judul'] === $film) {
                        $selectedFilm = $movie;
                    }
                }

                if ($selectedFilm) {
                    if ($usia >= $selectedFilm['minUsia']) {
                        echo '<p>Sudah cukup umur untuk menonton film "'.$selectedFilm['judul'].'"<br/> Harga Tiket untuk film ' . $selectedFilm['judul'] . " = <span style='color: green'>Rp " . number_format($selectedFilm['harga'], 0, ',', '.') . '</span></p>';
                    } else {
                        echo '<p>Belum cukup umur untuk menonton "' . $selectedFilm['judul'] . '".</p>';
                    }
                } else {
                    echo '<p>Error Film Selection.</p>';
                }
            }
        }
        ?>
    </div>

</body>

</html>