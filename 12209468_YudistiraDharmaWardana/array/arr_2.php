<!DOCTYPE html>
<html>

<head>
    <title>Array</title>
</head>

<body>
    <?php
    $listFilm = [
        [
            "judul" => "Dua Garis Biru",
            "min-usia" => 21,
            "harga" => 45000
        ],
        [
            "judul" => "Doraemon The Movie",
            "min-usia" => 15,
            "harga" => 35000
        ],
        [
            "judul" => "Ninja Hatori",
            "min-usia" => 10,
            "harga" => 35000
        ]
    ];

    if (isset($_POST['simpan'])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];

        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if ($usia > $minUsia) {
            echo "silahkan untuk membayar sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
        } else {
            echo "<h2>Usia belum cukup</h2>";
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