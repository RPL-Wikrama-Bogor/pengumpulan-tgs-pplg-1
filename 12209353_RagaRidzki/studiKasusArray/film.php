<?php
$listFilm = [
    [
        "film" => "Dont Look Up",
        "usia" => 17,
        "harga" => 30000
    ],

    [
        "film" => "Uncharted",
        "usia" => 15,
        "harga" => 30000
    ],

    [
        "film" => "Jumanji",
        "usia" => 16,
        "harga" => 30000
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        margin: 20px 0;
        color: #333;
    }

    form {
        text-align: center;
        margin: 20px auto;
        max-width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
    }

    td {
        padding: 10px;
        text-align: left;
    }

    label {
        font-weight: bold;
    }

    select,
    input[type="number"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    p {
        text-align: center;
        font-weight: bold;
        margin-top: 10px;
    }
</style>


<body>
    <h1>Mencari Nilai</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Usia:</td>
                <td><input type="number" name="usia" required></td>
            </tr>
            <tr>
                <td><label for="films">Pilih Judul Film:</label></td>
                <td>
                    <select name="films" id="films">
                        <option hidden>PILIH FILM</option>
                        <?php foreach ($listFilm as $film): ?>
                            <option value="<?= $film["film"] ?>">
                                <?= $film["film"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $judul_terpilih = $_POST['films'];
    $usia = $_POST['usia'];
    $harga = null;

    foreach ($listFilm as $film) {
        if ($film['film'] === $judul_terpilih) {
            $harga = $film['harga'];
            break;
        }
    }

    if ($harga !== null) {
        if ($usia >= $film['usia']) {
            echo "Usia terpenuhi, silakan bayar Rp. $harga untuk film $judul_terpilih.";
        } else {
            echo "Usia Anda tidak memenuhi persyaratan untuk menonton film $judul_terpilih.";
        }
    } else {
        echo "Judul film tidak valid.";
    }
}

?>