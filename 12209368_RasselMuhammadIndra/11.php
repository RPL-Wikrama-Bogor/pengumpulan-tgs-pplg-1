<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans", sans-serif;
    scroll-behavior: smooth;
  }

  p {
    text-align: center;

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
      ?></p>
</body>

</html>