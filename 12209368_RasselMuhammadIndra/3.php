<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
    scroll-behavior: smooth;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Highest number out of the three</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Number 1 : </td>
        <td><input type="number" name="a"></td>
      </tr>
      <tr>
        <td>Number 2 : </td>
        <td><input type="number" name="b"></td>
      </tr>
      <tr>
        <td>Number 3 : </td>
        <td><input type="number" name="c"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$a;
$b;
$c;
if (isset($_POST['submit'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  if ($a > $b && $a > $c) {
    echo "Angka Terbesar adalah" . $a;
  } elseif ($b > $a && $b > $c) {
    echo "Angka Terbesar adalah" . $b;
  } elseif ($c > $a && $c > $b) {
    echo "Angka Terbesar adalah" . $c;
  } else {
    echo "Semua angka sama besar";
  }
}
?></p>
</body>

</html>