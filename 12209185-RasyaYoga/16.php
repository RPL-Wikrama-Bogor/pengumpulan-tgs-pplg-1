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
      <tr>
        <td><button type="submit" name="submit">button</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$i = 1;
if (isset($_POST['submit'])) {
  while($i <= 50){
    if($i % 2 == 0){
      echo "genap : ".$i."<br>";
    }
    else{
      echo "ganjil : ".$i."<br>";
    }
    $i++;
  }
}
?></p>
</body>

</html>