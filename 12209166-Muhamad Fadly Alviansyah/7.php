<?php
$total_gram;
$harga_sebelum;
$diskon;
$harga_setelah;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Yg Harus Dibayar</h3>
  <form action="" method="post">

        <b>Total gram</b>
        <input type="number" name="berat">

        <button type="submit" name="submit">Hitung</button>

  </form>
</body>
<?php

if(isset($_POST['submit'])){
  $total_gram = $_POST['berat'];

  $harga_sebelum = 500*$total_gram;
  $diskon = 5*$harga_sebelum/100;
  $harga_setelah = $harga_sebelum - $diskon;

  echo "Harga Sebelum: $harga_sebelum <br> Diskon: $diskon <br> Harga Sesudah Diskon: $harga_setelah";
}

?>
</html>