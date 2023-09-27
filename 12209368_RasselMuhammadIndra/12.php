<style>
<<<<<<< HEAD
=======
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
<<<<<<< HEAD
    font-family: "Open Sans", sans-serif;
    scroll-behavior: smooth;
=======
    font-family: 'Poppins', sans-serif;
  }

  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
    min-height: 100vh;
    background: linear-gradient(45deg, gray, white);
  }

  h2 {
    width: 100%;
    height: 60px;
    justify-content: center;
    padding: 20px;
    display: flex;
    position: relative;
    clear: left;
  }

  .base {
    width: 100%;
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    position: relative;
  }

  .form {
    width: 65%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
  }

  .form h3 {
    margin-top: 10px;
  }

  .form input[type='text'],
  .form input[type='number'] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
  }

  .form input[type='submit'] {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }

  .form input[type='submit']:hover {
    background-color: #0056b3;
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
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
<<<<<<< HEAD
  <h1>Time</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Hour : </td>
        <td><input type="number" name="hh"></td>
      </tr>
      <tr>
        <td>Minute : </td>
        <td><input type="number" name="mm"></td>
      </tr>
      <tr>
        <td>Second : </td>
        <td><input type="number" name="ss"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$hh;
$mm;
$ss;
if (isset($_POST['submit'])) {
  $hh = $_POST['hh'];
  $mm = $_POST['mm'];
  $ss = $_POST['ss'];
  $ss = $ss + 1;
  if($ss >= 60){
    $mm = $mm + 1;
    $ss = 00;
  }
  else{
    $ss = $ss;
  }
  if($mm >= 60){
    $hh = $hh + 1;
    $mm = 00;
    $ss = 00;
  }
  else{
    $mm = $mm;
  }
  if($hh >= 24){
    $hh = 00;
    $mm = 00;
    $ss = 00;
  }
  else{
    $hh = $hh;
  }
  echo $hh.":".$mm.":".$ss;
}
?></p>
=======
  <h2>Time</h2>
  <div class="base">
    <div class="form">
      <form action="" method="post">
        <h3>Hour :</h3>
        <input type="number" name="hh">
        <h3>Minute :</h3>
        <input type="number" name="mm">
        <h3>Second :</h3>
        <input type="number" name="ss">
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
  <div class="base">
    <p><?php
        $hh;
        $mm;
        $ss;
        if (isset($_POST['submit'])) {
          $hh = $_POST['hh'];
          $mm = $_POST['mm'];
          $ss = $_POST['ss'];
          $ss = $ss + 1;
          if ($ss >= 60) {
            $mm = $mm + 1;
            $ss = 00;
          } else {
            $ss = $ss;
          }
          if ($mm >= 60) {
            $hh = $hh + 1;
            $mm = 00;
            $ss = 00;
          } else {
            $mm = $mm;
          }
          if ($hh >= 24) {
            $hh = 00;
            $mm = 00;
            $ss = 00;
          } else {
            $hh = $hh;
          }
          echo $hh . ":" . $mm . ":" . $ss;
        }
        ?></p>
  </div>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</body>

</html>