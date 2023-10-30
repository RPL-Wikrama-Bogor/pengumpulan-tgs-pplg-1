<!DOCTYPE html>
<html>

<head>
    <title>Array</title>
</head>

<body>

    <?php
    $listFilm = [
        [
            "judul" => "Mencuri Raden Saleh",
            "min-usia" => 15,
            "harga" => 45000
        ],
        [
            "judul" => "Train To Busan",
            "min-usia" => 17,
            "harga" => 35000
        ],
        [
            "judul" => "Avatar",
            "min-usia" => 7,
            "harga" => 35000
        ]
    ];

    if (isset($_POST['simpan'])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];

        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if ($usia > $minUsia) {
            echo "<h2 style='color: green'>silahkan bayar sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
        } else {
            echo "<h2 style='color: red'>Usia ga cukup</h2>";
        }
    }
    ?>

    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Usia</td>
                    <td><input type="number" name="usia"></td>
                </tr>
                <tr>
                    <td>Film</td>
                    <td>
                        <select name="judul">
                            <option hidden>--pilih film--</option>
                            <?php
                            foreach ($listFilm as $key => $film) {
                            ?>
                                <option value="<?= $key ?>"><?= $film['judul'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html>