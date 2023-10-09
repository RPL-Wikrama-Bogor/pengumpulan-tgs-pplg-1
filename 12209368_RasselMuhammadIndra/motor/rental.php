<?php
class Motorcycle
{
  private $member = ["Hammilton","John","Mayer","Lala"];
  public function getMember($privilege){
    return in_array($privilege, $this->member);
  }
  public function getDiscount($time,$member){
    if($member && $time > 0){
      return 0.05;
    }
    return 0;
  }
  public function getTotalPrice($name, $time, $priceperday){
    $tax = 10000;
    $member = $this->getMember($name);
    $discount = $this->getDiscount($time,$member);
    $pricewithoutDiscount = $priceperday * $time;
    $totalDiscount = $pricewithoutDiscount * $discount;
    $pricewithDiscount = $pricewithoutDiscount - $totalDiscount;
    $totalPrice = $pricewithDiscount + ($time * $tax);
    return $totalPrice;
  }
}
$motorcycle = [
  ["name" => "Honda CBR 1000 RR", "price" => 230000],
  ["name" => "Yamaha YZF R1M", "price" => 320000],
  ["name" => "Ducati Panigale V4S", "price" => 425000],
  ["name" => "Kawasaki ZX-10R", "price" => 275000]
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
    input[type="text"],input[type="number"],input[type="submit"]{
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
  <h2>Motorcycle Rental</h2>
  <form action="" method="post">
    <p>Name :</p>
    <input type="text" name="name">
    <p>Choose Bike to Rent :</p>
    <select name="bike" id="" required>
      <option hidden>Choose Bike</option>
      <?php foreach ($motorcycle as $key => $type) { ?>
        <option value="<?= $key ?>"><?= $type['name'] ?></option>
      <?php } ?>
    </select>
    <p>Day To Rent :</p>
    <input type="number" name="day" id="">
    <input type="submit" value="Submit" name="submit">
    <?php
    if (isset($_POST['submit'])) {
      $name = ucwords($_POST['name']);
      $selected = $_POST['bike'];
      $day = $_POST['day'];
      $selectedBike = $motorcycle[$selected]['name'];
      $selectedPrice = $motorcycle[$selected]['price'];
      $bike = new Motorcycle();
      $total = $bike->getTotalPrice($name, $day, $selectedPrice);
      echo "<div class='result-modal'>";
      echo "<h3>Order Result:</h3>";
      echo "<p>Name  : ".$name."</p>";
      echo "<p>Motorcycle  : ".$selectedBike."</p>";
      echo "<p>Day To Rent : ".$day."</p>";
      echo "<p>Total Price : ".$total."</p>";
      echo "</div>";
    }
    ?>
</body>
</html>