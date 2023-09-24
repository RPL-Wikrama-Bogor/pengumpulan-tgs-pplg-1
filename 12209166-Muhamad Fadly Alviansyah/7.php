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
  <h3>Program untuk Menghitung Uang yang Harus di Bayar</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td>Total Berat(gram)</td>
        <td><input type="number" name="berat"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Hitung</button></td>
      </tr>
    </table>
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