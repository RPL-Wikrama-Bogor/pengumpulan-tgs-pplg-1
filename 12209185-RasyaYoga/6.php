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
  <h1>From Total Second to Hour, Minute, Second</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Total Second : </td>
        <td><input type="number" name="total"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$h;
$m;
$s;
$total;
$leftover;
if (isset($_POST['submit'])) {
  $total = $_POST['total'];
  $leftover = $total % 3600;
  $h = ($total - $leftover) / 3600;
  $leftover2 = $leftover % 60;
  $m = ($leftover-$leftover2) / 60;
  $s = $leftover2;
  echo $h." jam".$m." menit".$s." detik";
}
?></p>
</body>

</html>