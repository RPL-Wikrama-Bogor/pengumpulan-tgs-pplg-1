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
                <h2 class="text-center text-white">jam detik menit</h2>
            </div>
                <form action="" method="POST" class="form-group">
                    <label for="nama" class="form-label">Jam</label>
                    <input type="text" name="jam" id="nama" class="form-control" >

                    <label for="nilaiK" class="form-label mt-2">Menit</label>
                    <input type="number" name="menit" id="nilaiK" class="form-control">

                    <label for="nama" class="form-label">Detik</label>
                    <input type="text" name="detik" id="nama" class="form-control">

                    <input type="submit" value="Hitung Nilai" class="btn btn-success mt-3" name="submit">
                </form>
            </div>
        </div>
    </div>


</body>

</html> 

<?php

  if (isset($_POST['submit'])) {
      $jam = $_POST['jam'];
      $menit = $_POST['menit'];
      $detik = $_POST['detik'];
      
      $total = $jam * 3600 + $menit * 60 + $detik;

      echo $jam. ' jam '.$menit.' menit '.$detik.' detik<br>Total Detik = '.$total;
  } 
?>