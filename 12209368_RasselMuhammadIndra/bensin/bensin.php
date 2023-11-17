<?php
class Gasoline
{
  protected $tax;
  protected $litre;
  protected $price;
  protected $type;
  public function __construct($litre, $price, $tax)
  {
    $this->litre = $litre;
    $this->price = $price;
    $this->tax = $tax;
  }
}
class Bills extends Gasoline
{
  public function calculateTax()
  {
    $totalTax = $this->litre * $this->price * $this->tax;
    return $totalTax;
  }
  public function calculatePrice()
  {
    $totalPrice = $this->price * $this->litre + ($this->litre * $this->price * $this->tax);
    return $totalPrice;
  }
}
$fuelInfo = [
  ["name" => "Shell Super", "price" => 15420],
  ["name" => "Shell V-Power", "price" => 16130],
  ["name" => "Shell V-Power Diesel", "price" => 18310],
  ["name" => "Shell V-Power Nitro", "price" => 16510]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    select{
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="number"],input[type="submit"]{
      width: 95%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 0 auto;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    select {
      background-color: #fff;
    }

    input[type="number"] {
      background-color: #f9f9f9;
    }

    input[type="submit"] {
      background-color: #333;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }

    .error {
      color: red;
      font-weight: bold;
      margin-top: 10px;
    }

    .result-modal {
      background-color: #fff;
      max-width: 400px;
      padding: 20px;
      border-radius: 5px;
      margin: 0 auto;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <h2>Gas Station</h2>
  <form action="" method="post">
    <p>Choose Fuel Type :</p>
    <select name="gas" id="" required>
      <option hidden>Choose Type</option>
      <?php foreach ($fuelInfo as $key => $type) { ?>
        <option value="<?= $key ?>"><?= $type['name'] ?></option>
      <?php } ?>
    </select>
    <p>Litre:</p>
    <input type="number" name="litre" id="">
    <input type="submit" value="Submit" name="submit">
    <?php
    if (isset($_POST['submit'])) {
      $selected = $_POST['gas'];
      $litre = $_POST['litre'];
      $selectedGas = $fuelInfo[$selected]['name'];
      $selectedPrice = $fuelInfo[$selected]['price'];
      $Gas = new Bills($litre ,$selectedPrice, 0.1);
      $tax = $Gas->calculateTax();
      $total = $Gas->calculatePrice();
      echo "<div class='result-modal'>";
      echo "<h3>Order Result:</h3>";
      echo "<p>Gas Type    : ".$selectedGas."</p>";
      echo "<p>Tax         : ".$tax."</p>";
      echo "<p>Gas Litre   : ".$litre."</p>";
      echo "<p>Total Price : ".$total."</p>";
      echo "</div>";
    }
    ?>
</body>
</html>