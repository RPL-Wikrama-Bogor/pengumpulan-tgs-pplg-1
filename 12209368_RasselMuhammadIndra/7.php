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
  <h1>Orange</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Gram : </td>
        <td><input type="number" name="gram"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$gram;
$before;
$discount;
$after;
if (isset($_POST['submit'])) {
  $gram = $_POST['gram'];
  $before = 500 * $gram;
  $discount = 5 * $before / 100;
  $after = $before - $discount;
  echo "Price Before Discount : ".$before."<br>";
  echo "Discount              : ".$discount."<br>";
  echo "Price After Discount  : ".$after;
}
?></p>
</body>

</html>