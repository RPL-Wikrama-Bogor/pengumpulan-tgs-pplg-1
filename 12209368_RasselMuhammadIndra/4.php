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
  <h1>Salary</h1>
  <form action="" method="post">
    <table>
      <tr>
        <td>Employee Name : </td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>Employee Salary : </td>
        <td><input type="number" name="salary"></td>
      </tr>
      <tr>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
  <p><?php
$salary;
$name;
$allowance;
$tax;
$net_salary;
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $salary = $_POST['salary'];
  $allowance = $salary / 100 * 20;
  $tax = ($salary + $allowance) / 100 * 15;
  $net_salary = $salary + $allowance - $tax;
  echo "Employee : ".$name."<br>"."Allowance : ".$allowance."<br>"."Tax : ".$tax."<br>"."Net Salary : ".$net_salary;
}
?></p>
</body>

</html>