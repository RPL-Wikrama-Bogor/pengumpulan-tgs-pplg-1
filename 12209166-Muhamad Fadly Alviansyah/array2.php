<?php

$listFilm = [
  [
    "judul" => "Film 1",
    "min" => 15,
    "harga" => 40000
  ],
  [
    "judul" => "Film 2",
    "min" => 16,
    "harga" => 45000
  ],
  [
    "judul" => "Film 3",
    "min" => 17,
    "harga" => 50000
  ]
];

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
        <td>Input umur</td>
        <td><input type="number" name="umur" required></td>
      </tr>
      <tr>
        <td>Pilih Film</td>
        <td>
          <select name="film" required>
            <?php foreach($listFilm as $key => $film) : ?>
            <option value="<?= $key ?>"><?= $film['judul'] ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>
</html>