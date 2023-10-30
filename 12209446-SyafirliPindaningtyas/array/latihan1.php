<?php
$listFilm = [
    [
        "judul" => "Frozen II",
        "usia" => 13,
        "harga" => 35000
    ],
    [
        "judul" => "Moana",
        "usia" => 15,
        "harga" => 35000

    ],
    [
        "judul" => "The nun",
        "usia" => 17,
        "harga" => 35000

    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Bioskop</title>
</head>

<body>
    <center>
    <form action="" method="POST">
        <label for="">Usia : </label>
        <input type="number" id="usia" name="usia"></br>
        <label for="">Judul : </label>
        <select name="judul" id="">
            <option value="">--pilih judul--</option>
            <option value="0"><?= $listFilm [0]["judul"]?></option>
            <option value="0"><?= $listFilm [1]["judul"]?></option>
            <option value="0"><?= $listFilm [2]["judul"]?></option>
        </select></br>
        <input type="submit" value="simpan" name="submit">
    </form>
    </center>
    <?php
    if(isset($_POST['submit'])){
            $usia = $_POST['usia'];
            $judul = $_POST['judul'];


            if($usia < $listFilm[$judul]['usia'] ){
                echo "Usia belum cukup !";
            }else{
                echo "Anda harus membayar sebesar Rp. " . $listFilm[$judul]['harga'];
            }
        }
        ?>
</body>

</html>