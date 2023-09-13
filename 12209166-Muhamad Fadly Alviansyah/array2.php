<?php

$listFilm = [
  [
    "judul" => "Azab",
    "min" => 1,
    "harga" => 40000
  ],
  [
    "judul" => "Tukang Haji Makan Bubur",
    "min" => 16,
    "harga" => 45000
  ],
  [
    "judul" => "Preman Belum Pensiun",
    "min" => 17,
    "harga" => 50000
  ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/array2.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Muhamad Fadly Alviansyah</h2>
      <form action="" method="post">
        <label for="umur">Input umur</label>
        <input type="number" name="umur" for="umur" required>
        <label for="film">Pilih film</label>
        <select name="film" required>
          <?php foreach($listFilm as $key => $film) : ?>
          <option value="<?= $key ?>"><?= $film['judul'] ?></option>
          <?php endforeach; ?>
        </select>
        <button type="submit" name="submit">Submit</button>
      </form>
      <?php
        if(isset($_POST['submit'])){
          $age = $_POST['umur'];
          $idFilm = $_POST['film'];
        
          $minAge = $listFilm[$idFilm]["min"];
          $price = $listFilm[$idFilm]["harga"];
        
          if($age >= $minAge){
            echo "Silahkan untuk membayar sebesar Rp." . number_format($price, 2, ',', '.');
          }else{
            echo "Usia belum cukup";
          }
        }
      ?>
    </div>
  </div>
  
</body>
</html>