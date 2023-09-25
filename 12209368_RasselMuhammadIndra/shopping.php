<?php
$assembly = [
  ["name" => "Toddler Bed", "price" => 30000],
  ["name" => "Dinner Table", "price" => 50000],
  ["name" => "Chair", "price" => 40000]
];
$assembled = [
  ["name" => "Pan", "price" => 15000],
  ["name" => "Glass & Plates", "price" => 30000],
  ["name" => "Utensils", "price" => 25000]
];

$selectedAssembledFurniture = "";
$selectedAssemblyFurniture = "";
$selectedAssembled = "";
$selectedAssembly = "";
$totalPrice = 0;
$assembledQuantity = 0;
$assemblyQuantity = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  if (isset($_POST["assembly"]) && $_POST["assembly"] !== "Choose Furniture") {
    $selectedAssembly = $_POST["assembly"];
    $assemblyQuantity = $_POST["assemblyQuantity"];
    $selectedAssemblyFurniture = $assembly[$selectedAssembly]["name"];
    $totalPrice += $assembly[$selectedAssembly]["price"] * $assemblyQuantity;
  }

  if (isset($_POST["assembled"]) && $_POST["assembled"] !== "Choose Furniture") {
    $selectedAssembled = $_POST["assembled"];
    $assembledQuantity = $_POST["assembledQuantity"];
    $selectedAssembledFurniture = $assembled[$selectedAssembled]["name"];
    $totalPrice += $assembled[$selectedAssembled]["price"] * $assembledQuantity;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture</title>
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

    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="number"],
    input[type="submit"] {
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
  <h2>Movie Ticket</h2>
  <form action="" method="post">
    <p>Assembly Furniture:</p>
    <select name="assembly" id="" required>
      <option hidden>Choose Furniture</option>
      <?php foreach ($assembly as $key => $furni) { ?>
        <option value="<?= $key ?>"><?= $furni['name'] ?></option>
      <?php } ?>
    </select>
    <p>Quantity:</p>
    <input type="number" name="assemblyQuantity" id="">
    <p>Assembled Furniture:</p>
    <select name="assembled" id="" required>
      <option hidden>Choose Furniture</option>
      <?php foreach ($assembled as $key => $furni) { ?>
        <option value="<?= $key ?>"><?= $furni['name'] ?></option>
      <?php } ?>
    </select>
    <p>Quantity:</p>
    <input type="number" name="assembledQuantity" id="">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  if (!empty($selectedAssembledFurniture) && !empty($selectedAssemblyFurniture)){
    echo "<div class='result-modal'>";
    echo "<h3>Order Result:</h3>";
    echo "<p>Assembled Furniture: $selectedAssembledFurniture</p>";
    echo "<p>Quantity: $assembledQuantity</p>";
    echo "<p>Assembly Furniture: $selectedAssemblyFurniture</p>";
    echo "<p>Quantity: $assemblyQuantity</p>";
    echo "<p>Total Price: Rp $totalPrice</p>";
    echo "</div>";
  }
  elseif (!empty($selectedAssemblyFurniture)){
    echo "<div class='result-modal'>";
    echo "<h3>Order Result:</h3>";
    echo "<p>Assembly Furniture: $selectedAssemblyFurniture</p>";
    echo "<p>Quantity: $assemblyQuantity</p>";
    echo "<p>Total Price: Rp $totalPrice</p>";
    echo "</div>";
  }
  elseif (!empty($selectedAssembledFurniture)){
    echo "<div class='result-modal'>";
    echo "<h3>Order Result:</h3>";
    echo "<p>Assembled Furniture: $selectedAssembledFurniture</p>";
    echo "<p>Quantity: $assembledQuantity</p>";
    echo "<p>Total Price: Rp $totalPrice</p>";
    echo "</div>";
  }
  ?>
</body>

</html>