<?php

$i;
$terbesar;
$terkecil;
$rata;

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
    <table>
      <?php
      
      for($n=1; $n<=20;$n++){
        echo "
              <tr>
                <td>Input bilangan ke-$n</td>
                <td><input type='number' name='bilangan[]' required></td>
              </tr>
        
        ";
      }

      ?>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>
<?php

if(isset($_POST['submit'])){
  $bilangan = $_POST['bilangan'];
  $jumlah_bilangan = count ($bilangan);
  $max = PHP_INT_MIN;
  $min = PHP_INT_MAX;
  $total = 0;

  foreach ($bilangan as $nilai) {
      $max = max($max, $nilai);
      $min = min($min, $nilai);
      $total += $nilai;
  }

  $rata_rata = $total / $jumlah_bilangan;

        echo "<h2>Hasil Perhitungan</h2>";
        echo "Bilangan terbesar: $max<br>";
        echo "Bilangan terkecil: $min<br>";
        echo "Rata-rata: $rata_rata<br>";
}

?>
</html>