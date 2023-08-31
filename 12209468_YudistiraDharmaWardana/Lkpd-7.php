<?php

$total_gram;
$harga_sblm;
$harga_stlh;
$diskon;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lkpd Algoritma 7 </h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Berapa Gram</td>
            <td>:</td>
            <td><input type="text" name ="grm"></td>
        </tr>
    </table>

    <button name="submit" method="post">Kirim</button>
</form>    

</body>
</html>

<?php

if(isset($_POST['submit'])){

$total_gram = $_POST['grm'];

$harga_sblm = 500 * $total_gram;
$diskon = 5 * $harga_sblm /100;
$harga_stlh = $harga_sblm - $diskon;

echo " Harga sebelum diskon : " .$harga_sblm;
echo "<br>";
echo " diskon : " .$diskon;
echo "<br>";
echo " Harga setelah diskon : " .$harga_stlh;

}