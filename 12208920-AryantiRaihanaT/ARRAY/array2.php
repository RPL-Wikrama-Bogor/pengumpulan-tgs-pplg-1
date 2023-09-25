<?php 

$listFilm = [
    [
    "judul" => "Miracle In Cell No.7",
    "usiaMinimal" => 15,
    "harga" => 45000
    ],
    [
    "judul" => "The Invitation",
    "usiaMinimal" => 17,
    "harga" => 35000
    ],
    [
    "judul" => "Luck",
    "usiaMinimal" => 7,
    "harga" => 25000
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket Bioskop</title>
</head>
<body>
    <h2>Form Pembelian Tiket Bioskop</h2>
    <form action="" method="post">
        <label for="">Usia : </label>
        <input type="number" name="usia">
        <br><br>
        <label for="judul">Judul : </label>
        <select name="judul" id="judul">
            <option value="" hidden disabled selected>---Pilih---</option>
            <option value="0"><?= $listFilm[0]["judul"]; ?></option>
            <option value="0"><?= $listFilm[1]["judul"]; ?></option>
            <option value="0"><?= $listFilm[2]["judul"]; ?></option>
        </select>
        <br><br>
        <input type="submit" value="Beli Tiket" name="submit">
    </form>
    <br>

</body>

<?php 

        if(isset($_POST['submit'])){
            $usia = $_POST['usia'];
            $judul = $_POST['judul'];


            if($usia < $listFilm[$judul]['usiaMinimal'] ){
                echo "Usia belum cukup";
            }else{
                echo "Anda harus membayar sebesar Rp. " . $listFilm[$judul]['harga'];
            }
        }

    ?>

</html>