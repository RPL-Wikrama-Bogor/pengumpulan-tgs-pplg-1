<?php

$products = [
  [
    "nama" => "Barang 1",
    "harga" => 10000,
    "tipe" => "rakitan"
  ],
  [
    "nama" => "Barang 2",
    "harga" => 20000,
    "tipe" => "non rakitan"
  ],
  [
    "nama" => "Barang 3",
    "harga" => 30000,
    "tipe" => "rakitan"
  ],
  [
    "nama" => "Barang 4",
    "harga" => 40000,
    "tipe" => "non rakitan"
  ],
  [
    "nama" => "Barang 5",
    "harga" => 50000,
    "tipe" => "rakitan"
  ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/array3.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Muhamad Fadly Alviansyah</h2>

      <ol>
        <?php foreach($products as $product): ?>
        <li>
          Nama Barang : <?= $product['nama'] ?> <br>
          Harga Barang : <?= $product['harga'] ?> <hr>
        </li>
        <?php endforeach; ?>
      </ol>

      <form action="" method="post">
        <label for="rakitan">Input Barang Rakitan</label>
        <select name="rakitan" id="rakitan">
          <option disabled selected>---Pilih Barang Rakitan---</option>
          <?php
          foreach($products as $key => $product):
            if($product["tipe"] == "rakitan"):
          ?>
          <option value="<?= $key ?>"><?= $product["nama"]; ?></option>
          <?php
            endif;
          endforeach;
          ?>
        </select>
        <label for="rakitanQuantity">Input quantity barang rakitan yang dibeli</label>
        <input type="number" id="rakitanQuantity" name="rakitanQuantity">
        <label for="rakitan">Input Barang Non Rakitan</label>
        <select name="non-rakitan" id="nonrakitan">
          <option disabled selected>---Pilih Barang Non-Rakitan---</option>
          <?php
          foreach($products as $key => $product):
            if($product["tipe"] == "non rakitan"):
          ?>
          <option value="<?= $key ?>"><?= $product["nama"]; ?></option>
          <?php
            endif;
          endforeach;
          ?>
        </select>
        <label for="nonRakitanQuantity">Input quantity barang non rakitan yang dibeli</label>
        <input type="number" id="nonRakitanQuantity" name="nonRakitanQuantity">
        <button type="submit" name="submit">Submit</button>
      </form>

      <?php

      if(isset($_POST['submit'])){
        if(isset($_POST['rakitan'])){
          $rakitan = $_POST['rakitan'];
          $jumlahRakitan = $_POST['rakitanQuantity'];

          $namaRakitan = $products[$rakitan]["nama"];
          $hargaRakitan = $products[$rakitan]["harga"];

          $totalRakitan = $hargaRakitan * $jumlahRakitan;
        }else{
          $namaRakitan = 0;
          $jumlahRakitan = 0;
          $hargaRakitan = 0;
          $totalRakitan = 0;
        }
        
        if(isset($_POST['non-rakitan'])){
          $nonRakitan = $_POST['non-rakitan'];
          $jumlahNon = $_POST['nonRakitanQuantity'];

          $namaNon = $products[$nonRakitan]["nama"];
          $hargaNon = $products[$nonRakitan]["harga"];

          $totalNon = $hargaNon * $jumlahNon;
        }else{
          $namaNon = 0;
          $jumlahNon = 0;
          $hargaNon = 0;
          $totalNon = 0;
        }
      }
      ?>
      <table>
        <tr>
          <td>Barang Rakitan</td>
          <td><?= $namaRakitan ?></td>
        </tr>
        <tr>
          <td>Jumlah Barang Rakitan</td>
          <td><?= $jumlahRakitan ?></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><?= number_format($totalRakitan, 0, ",", ".") ?></td>
        </tr>
        <tr>
          <td><hr></td>
          <td><hr></td>
        </tr>
        <tr>
          <td>Barang Non-Rakitan</td>
          <td><?= $namaNon ?></td>
        </tr>
        <tr>
          <td>Jumlah Barang Non-Rakitan</td>
          <td><?= $jumlahNon ?></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><?= number_format($totalNon, 0, ",", ".") ?></td>
        </tr>
        <tr>
          <td><hr></td>
          <td><hr></td>
        </tr>
        <tr>
          <td>Total</td>
          <td><?= number_format($totalRakitan + $totalNon, 0, ",", ".") ?></td>
        </tr>
      </table>
    </div>
  </div>
</body>
</html>