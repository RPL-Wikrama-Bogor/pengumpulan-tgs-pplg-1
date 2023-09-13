<!DOCTYPE html>
<html>

<head>
    <title>Array</title>
</head>

<body>
    <?php
    $listFilm = [
        [
            "judul" => "Fast And Furious 9",
            "min-usia" => 14,
            "harga" => 45000
        ],
        [
            "judul" => "Enternarls",
            "min-usia" => 16,
            "harga" => 35000
        ],
        [
            "judul" => "The nun II",
            "min-usia" => 12,
            "harga" => 35000
        ],        
        [
            "judul" => "Avengers",
            "min-usia" => 11,
            "harga" => 0
        ],
    ];

    if (isset($_POST['simpan'])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];

        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if ($usia > $minUsia) {
            echo "<h2 style='color: green'>silahkan untuk membayar tiket film sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
        } else {
            echo "<h2 style='color: red'>Usia belum cukup</h2>";
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