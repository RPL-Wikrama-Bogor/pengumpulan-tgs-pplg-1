<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kalkulator Nilai</title>
</head>

<body>

    <div class="container">
        <div class="card shadow mt-3 mb-3">
            <div class="card-header bg-primary">
                <h2 class="text-center text-white">Gaji Karyawan</h2>
            </div>
                <form action="" method="POST" class="form-group">
                    <label for="nama" class="form-label">berat jeruk</label>
                    <input type="text" name="bj" id="bb" class="form-control" placeholder="berat jeruk">


                    <input type="submit" value="Hitung Nilai" class="btn btn-success mt-3" name="submit">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html> 

<?php

  if (isset($_POST['submit'])) {
      $bj = $_POST['bj'];
      
      $harga = 500;
      $ha = $bj/100 * $harga;
      $hd = 0.05 * $ha;
      $hsd = $ha - $hd;

      echo $ha.' harga awal <br>'.$hd.' harga diskon <br>'.$hsd.' harga setelah diskon <br>';
  } 
?>