<?php
$listFilm = [
    [
        'judul' => "Ketika berhenti disini",
        'min-usia' => 15,
        'harga' => 35000
    ],
    [
        'judul' => "Coco",
        'min-usia' => 8,
        'harga' => 35000
    ],
    [
        'judul' => "Sewu Dino",
        'min-usia' => 13,
        'harga' => 35000
    ]

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="usia" placeholder="Masukan Usia...">
        <br>
        <select name="judul_id" id="">
            <option disable hidden selected> ---Pilih Judul Film---</option>
            <?php
            foreach ($listFilm as $key => $item) {
            ?>

                <option value="<?= $key ?>"><?= $item['judul']?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <button type="submit" name="submit">Beli Tiket</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $usia = $_POST['usia'];
        $arrayId= $_POST['judul_id'];
        $minUsia = $listFilm[$arrayId] ['min-usia'];
        $harga = $listFilm[$arrayId] ['harga'];

        if ($usia < $minUsia) {
            echo "<h4 style='color: red'> Usia belum cukup</h4>";
        }else {
            echo "<h4 style='color:green'>Harga yang harus dibayar Rp " . number_format($harga,2, ",", ".") . "</h4>";
        }
    }?>
    
</body>
</html>
