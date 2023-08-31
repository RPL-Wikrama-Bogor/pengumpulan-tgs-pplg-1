<?php

$suhu_fahrenheit;
$suhu_celcius;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suhu</title>
</head>

<body>
  <h3>Mencetak kata panas, dingin, atau normal </h3>
  <form method="post" action="">
    <tr>
      <td><label for="suhu">Input Suhu Fahrenheit</label></td>
      <td><input type="number" name="suhu" id="suhu"></td>
      <td><input type="submit" value="Submit" name="submit"></td>
    </tr>
  </form>

  <?php

  if (isset($_POST['submit'])) {
    $suhu_celcius = $_POST['suhu'];
    $suhu_fahrenheit;

    $suhu_fahrenheit = $suhu_celcius / 33.8;

    if ($suhu_celcius > 300) {
      echo "panas";
    } elseif ($suhu_celcius > 250) {
      echo "dingin";
    } else {
      echo "normal";
    }
  }

  ?>
</body>

</html>