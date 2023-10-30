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
  }

  p {
    text-align: center;

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
  <h1>Employee</h1>
  <div class="form">
    <form action="" method="post">
      <table>
        <tr>
          <td>Employee Number : </td>
          <td><input type="text" name="employee"></td>
        </tr>
        <tr>
          <td><button type="submit" name="submit">Submit</button></td>
        </tr>
      </table>
    </form>
  </div>
  <p><?php
=======
  <h2>Employee</h2>
  <div class="base">
    <div class="form">
      <form action="" method="post">
        <h3>Employee Number : </h3><br>
        <input type="text" name="employee"><br>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
  <div class="base">
    <p>
      <?php
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
      $employee_num;
      $class_num;
      $day;
      $month;
      $year;
      $num_order;
      $birth_date;
      if (isset($_POST['submit'])) {
        $employee_num = $_POST['employee'];
        if (strlen($employee_num) < 11) {
          $class_num = substr($employee_num, 0, 1);
          $day = substr($employee_num, 1, 2);
          $month = substr($employee_num, 3, 2);
          $year = substr($employee_num, 5, 4);
          $num_order = substr($employee_num, 9, 2);
          if ($month == "01") {
            $month = "January";
          } elseif ($month == "02") {
            $month = "February";
          } elseif ($month == "03") {
            $month = "March";
          } elseif ($month == "04") {
            $month = "April";
          } elseif ($month == "05") {
            $month = "May";
          } elseif ($month == "06") {
            $month = "June";
          } elseif ($month == "07") {
            $month = "July";
          } elseif ($month == "08") {
            $month = "August";
          } elseif ($month == "09") {
            $month = "September";
          } elseif ($month == "10") {
            $month = "October";
          } elseif ($month == "11") {
            $month = "November";
          } else {
            $month = "December";
          }
          $birth_date = $day . " " . $month . " " . $year;
          echo "Class Order  : " . $class_num . "<br>";
          echo "Birth Date   : " . $birth_date . "<br>";
          echo "Order Number : " . $num_order;
        } else {
          echo "Employee Number is does not match";
        }
      }
<<<<<<< HEAD
      ?></p>
=======
      ?>
    </p>
  </div>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</body>

</html>