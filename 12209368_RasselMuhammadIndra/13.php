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
  <h1>1 to 50</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td><button type="submit" name="submit">Count</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$i = 1;
if (isset($_POST['submit'])) {
  while($i <= 50){
    echo $i."<br>";
    $i++;
  }
}
?></p>
</body>

</html>