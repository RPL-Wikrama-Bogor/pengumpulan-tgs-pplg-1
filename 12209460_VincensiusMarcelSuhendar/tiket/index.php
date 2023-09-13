<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioskop Vinser</title>
</head>
<body>

    <?php
    $movies = [
        [
            "judul" => "Barbenheimer",
            "min-age" => 15,
            "harga" => 45000
        ],
        [
            "judul" => "Touhou: Schism",
            "min-age" => 17,
            "harga" => 35000
        ],
        [
            "judul" => "The Chosen",
            "min-age" => 7,
            "harga" => 35000
        ]
    ];
    ?>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Please state your age.</td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <td>Movie</td>
                    <td>
                        <select name="judul">
                            <option hidden>Which movie would you like?</option>
                            <?php
                            foreach ($movies as $key => $film) {
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
                    <td><input type="submit" name="save" value="Save"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
    if (isset($_POST['save'])) {
        $age = $_POST['age'];
        $movieId = $_POST['judul'];
        $minage = $movies[$movieId]['min-age'];
        $harga = $movies[$movieId]['harga'];

        if ($age > $minage) {
            echo "<h3 style='text-align: center;'>It is Rp. " . number_format($harga, 2, ',', '.') . " for the film.</h2>";
        } else {
            echo "<h3 style='text-align: center;'>I'm sorry, but you are too young.</h2>";
        }
    }
    ?>