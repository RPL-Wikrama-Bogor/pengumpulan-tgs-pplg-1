<!DOCTYPE html>
<html>

<head>
    <title>Array - Film</title>
</head>
<style>
    body {
            background-color: #96B6C5;
        }

        .card {
            border: 0px;
            width: 500px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #ADC4CE;
            shadow: 15px;
        
        }
        
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 15px;
        }


        button {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
        }

        h2 {
            color: #102C57;
        }

        label {
            font-size: 20px;
        }
 </style>
<body>
    <?php
    $listFilm = [
        [
            "judul" => "Barbie",
            "min-usia" => 13,
            "harga" => 45.000
        ],
        [
            "judul" => "The Big 4",
            "min-usia" => 17,
            "harga" => 55.000
        ],
        [
            "judul" => "Frozen 3",
            "min-usia" => 7,
            "harga" => 35.000
        ]
    ];

    if (isset($_POST['simpan'])) {
        $usia = $_POST['usia'];
        $filmId = $_POST['judul'];

        $minUsia = $listFilm[$filmId]['min-usia'];
        $harga = $listFilm[$filmId]['harga'];

        if ($usia > $minUsia) {
            echo "<h2 style='color: green'>Silahkan membayar sebesar Rp. " . number_format($harga, 2, ',', '.') . "</h2>";
        } else {
            echo "<h2 style='color: red'>Tidak bisa membeli, karena usia anda tidak cukup</h2>";
        }
    }
    ?>

    <center>
        <h1>Pilih Film yang anda inginkan</h1>
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