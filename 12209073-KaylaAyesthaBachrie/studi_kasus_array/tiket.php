<?php

    $listFilm = [
        [
            "judul" => "One Piece Red",
            "min-usia" => "16",
            "harga" => "35000"
        ],
        [
            "judul" => "Thor: Love and Thunder",
            "min-usia" => "21",
            "harga" => "40000"
        ],
        [
            "judul" => "Elemental: Forces of Nature",
            "min-usia" => "10",
            "harga" => "25000"
        ],
    ]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Film</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Usia : </td>
                    <td><input type="number" name="usia"></td>
                </tr>
                <tr>
                    <td>Film : </td>
                    <td>
                        <select name="film" id="">
                            <option hidden disable selected>pilih film</option>
                            <?php
                                foreach($listFilm as $key => $film){
                            ?>
                                <option value="<?=$key ?>"><?= $film ['judul'] ?></option>
                            <?php    
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="kirim" value="kirim"></td>
                </tr>
            </table>
        <?php
            if(isset($_POST['kirim'])){
                $usia = $_POST['usia'];
                $film_id = $_POST['film'];
                $minUsia = $listFilm[$film_id]['min-usia'];
                $harga = $listFilm[$film_id]['harga'];

                if($usia >= $minUsia){
                    echo "Silahkan untuk membayar sebesar Rp. " . number_format($harga, 2, ',', '.');
                }else{
                    echo "Usia belum cukup";
                }
            }
        ?>
    </center>
</body>
</html>