<?php
    $listmovies = [
        [
            "title" => "Howl's Moving Castle",
            "min_usia" => 10,
            "harga" => 35000,
        ],
        [
            "title" => "Princess Monoke",
            "min_usia" => 13,
            "harga" => 25000,
        ],
        [
            "title" => "Spirited away",
            "min_usia" => 7,
            "harga" => 40000,
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <table>
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia" id="usia" require></td><br>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>
                    <select name="title" id="title" require>
                        <option hidden disabled selected>--Pilihan--</option>
                        <?php
                            foreach($listmovies as $key => $film){
                        ?>
                         <option value="<?=$key ?>"><?= $film['title']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>
<?php
    if(isset($_POST['submit'])) {
        $usia = $_POST['usia'];
        $title= $_POST['title'];
        $minUsia = $listmovies[$title]['min_usia'];
        $hrg = $listmovies[$title]['harga'];

        if($usia >= $minUsia) {
            echo "<center><h2 style-'color : green'> Silahkan untuk membayar sebesar Rp.  " .
            number_format($hrg, 2, ',', '.') . "</h2></center>";
        }else{
            echo"<center><h2 style='color : red'>Usia belum cukup</h2></center>";
        }
        }
    ?>
    