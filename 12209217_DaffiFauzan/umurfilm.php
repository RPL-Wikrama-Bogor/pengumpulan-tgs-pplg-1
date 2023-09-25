
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menentukan Batas Umur</title>
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
      border-radius: 40px;
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
    input[type="number"], input[type="submit"]{
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
      background-color: #FFC436;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #FFCC70;
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
      border-radius: 30px;
      margin: 0 auto;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      margin-top: 20px;
    }
  </style>

<?php
$movies = [
  ["name" => "Oppenheimer", "age" => 17, "price" => 40000],
  ["name" => "Barbie", "age" => 12, "price" => 30000],
  ["name" => "Elemental", "age" => 0, "price" => 20000]
];

$selectedMovie = "";
$totalPrice = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $selected = $_POST["movie"];
  $userAge = $_POST["age"];

  if ($selected >= 0 && $selected < count($movies)) {
    $selectedMovie = $movies[$selected]["name"];
    $movieAge = $movies[$selected]["age"];

    if ($userAge >= $movieAge) {
      $totalPrice = $movies[$selected]["price"];
    } else {
      $error = "Your Age Is Not Enough For This Movie, Please Pick an another movie.";
    }
  } else {
    $error = "Please pick a movie";
  }
}
?>



</head>

<body>
  <h2>CINEMA XXI</h2>
  <form action="" method="post">
    <p>Movie:</p>
    <select name="movie" id="" required>
      <option hidden>Choose Film</option>
      <?php foreach ($movies as $key => $movie) { ?>
        <option value="<?= $key ?>"><?= $movie['name'] ?></option>
      <?php } ?>
    </select>
    <p>Age:</p>
    <input type="number" name="age" max="120" required>
    <input type="submit" name="submit" value="Submit">
  </form>

    <?php
    if (!empty($error)) {
      echo "<div class='result-modal'><p>$error</p></div>";
    } elseif (!empty($selectedMovie) && !empty($totalPrice)) {
      echo "<div class='result-modal'>";
      echo "<h3>Result:</h3>";
      echo "<p>Movie Title: $selectedMovie</p>";
      echo "<p>Total Price: Rp $totalPrice</p>";
      echo "</div>";
    }
    ?>

    
</body>

</html>
