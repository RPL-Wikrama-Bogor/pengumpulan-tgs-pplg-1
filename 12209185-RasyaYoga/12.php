<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Waktu</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h3 {
  margin-top: 0;
  color: #333;
}

form {
  margin-top: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

table td {
  padding: 10px;
  border: 1px solid #ddd;
}

table td:first-child {
  width: 120px;
}

input[type="number"] {
  width: 60px;
  padding: 5px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

  </style>
</head>
<div class="container">

<body>
    <h3>Input hh,mm,ss</h3>
  <form method="post" action="#">
    <table>
      <tr>
        <td>Input hh</td>
        <td><input type="number" name="hh" min="0" max="23"></td>
      </tr>
      <tr>
        <td>Input mm</td>
        <td><input type="number" name="mm" min="0" max="59"></td>
      </tr>
      <tr>
        <td>Input ss</td>
        <td><input type="number" name="ss" min="0" max="59"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $hh = intval($_POST['hh']);
    $mm = intval($_POST['mm']);
    $ss = intval($_POST['ss']);

    $ss += 1;
    if ($ss >= 60) {
      $ss = 0;
      $mm += 1;
      if ($mm >= 60) {
        $mm = 0;
        $hh += 1;
        if ($hh >= 24) {
          $hh = 0;
        }
      }
    }

    echo "Waktu setelah ditambah 1 detik: " . sprintf("%02d:%02d:%02d", $hh, $mm, $ss);
  }
  ?>
</body>
</html>