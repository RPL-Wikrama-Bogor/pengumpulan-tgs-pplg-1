<?php
$namafilm = [
    [
        "film" => "Kuntilanak2",
        "usia" => 17,
        "harga" => 40000
    ],

    [
        "film" => "ToyStory",
        "usia" => 8,
        "harga" => 25000
    ],

    [
        "film" => "The nun II",
        "usia" => 15,
        "harga" => 35000
    ],
];

if (isset($_POST['submit'])) {
    $judul_terpilih = $_POST['films'];
    $usia = ($_POST['usia']);
    $harga = null;
    foreach ($namafilm as $film) {
        if ($film['film'] === $judul_terpilih) {
            $harga = $film['harga'];
            break;
        }
    }
    if ($harga !== null) {
        if ($usia >= $film['usia']) {
            echo "<script>
            alert('usia anda mencukupi, silahkan membayar sebesar Rp. $harga');
            </script>";
        } else {
            echo "<script>
            alert('usia anda kurang cukup untuk menonton film ini $judul_terpilih');
            </script>";
        }
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="" method="post">
     <input type="number" name="usia" required>
     <br>
    <select name="films" id="films">
        <?php foreach ($namafilm as $film): ?>
            <option value="<?= $film["film"] ?>">
                <?= $film["film"] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br>
<input type="submit" value="Cari" name="submit">
    </form>
</div>
</body>
</html>
<style>
    body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:600px;
            background-color:#F8F0E5;
        }
    .container{
            background-color: #EADBC8;
            width: 350px;
            text-align: center;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 6px 9px 4px 0px rgba(49,230,167,1);
            -webkit-box-shadow: 6px 9px 4px 0px rgba(49,230,167,1);
            -moz-box-shadow: 6px 9px 4px 0px rgba(49,230,167,1);
        }
    input{
            width:150px;
            margin:10px;
            padding:10px;
            background-color:#DAC0A3;
            border-radius:10px;
            transition:.5s;
        }
    select{
            width:150px;
            margin:10px;
            padding:10px;
            background-color:#DAC0A3;
            border-radius:10px;
            transition:.5s;
        }
    input:hover{
            width:180px;
            margin:10px;
            padding:10px;
            background-color:#F5F5DC;
            border-radius:10px;
            transition:0.55s;
            color:#176B87;
        }
    select:hover{
            width:180px;
            margin:10px;
            padding:10px;
            background-color:#F5F5DC;
            border-radius:10px;
            transition:0.55s;
            color:#176B87;
        }
</style>