<?php
$j = 0;
$m = 0;
$d = 0;
$total_d = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nomor 4 Total Detik ke Jam-Menit-Detik</h1>
    <form action="" method="post">   
        <label for="dt">Total detik :<br></label>
        <input type="text" name="dt" placeholder="Masukan Total detik" id="dt">
        <button type="submit" name="submit">Submit</button>
    </form>
    <p> Total detik : <?= $total_d = $_POST["dt"]; ?></p>
    <p> <?= $j = floor($total_d / 3600); ?> jam </p>
    <p> <?= $m = floor(($total_d - ($j * 3600 )) / 60); ?> menit</p>
    <p> <?= $d = $total_d - ($j * 3600) - ($m * 60); ?> detik </p> 

</body>
</html>