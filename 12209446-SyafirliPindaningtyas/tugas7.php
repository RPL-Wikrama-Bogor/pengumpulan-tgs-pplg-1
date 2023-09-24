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
  <title>Diskon</title>
</head>

<body>
  <h3> menghitung jumlah uang yang harus dibayarkan</h3>
  <form method="POST" action="">
    <table>
      <tr>
        <label for="total_gram">Total gram </label>
        <input type="number" value="total gram" name="total_gram">
      </tr>
      <tr>
        <input type="submit" value="Hitung" name="submit">
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $total_gram = $_POST['total_gram'];
    $harga_sebelum;
    $diskon;
    $harga_setelah;
    $harga_sebelum = (500 * $total_gram);
    $diskon = (5 * $harga_sebelum) / 100;
    $harga_setelah = $harga_sebelum - $diskon;
    //output
    echo "Harga sebelum diskon = $harga_sebelum<br>";
    echo "Diskon = $diskon<br>";
    echo "Harga setelah diskon = $harga_setelah<br>";
  }
  ?>
</body>

</html>