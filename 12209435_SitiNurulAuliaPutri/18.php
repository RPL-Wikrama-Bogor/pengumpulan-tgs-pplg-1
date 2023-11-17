<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 18</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
  background-color: #EF9595;
}

.container{
  margin: 50px;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card{
  width: 70%;
  padding: 30px;
  border-radius: 30px;
  background-color: #EFD595;
  border: 7px solid #EFB495;
}


h3{
  text-align: center;
  margin-bottom: 20px;
}

label, input, button{
  border: none;
  font-weight: 500;
  width: 100%;
  display: block;
}

input{
  padding: 0px 5px;
  height: 30px;
  border-radius: 5px;
}

button{
  margin: 20px 0;
  background-color: #EBEF95;
  padding: 7px;
  border-radius: 10px;
}
    </style>
</head>
<body>
  <div class="container">
    <div class="card">

      <h3>Mencari Juara</h3>

      <form action="" method="post">
        <?php for($i = 1; $i <= 3; $i++): ?>
        <label for="nama">Input nama siswa ke-<?= $i ?></label>
        <input type="text" id="nama" name="nama[]" required>
        <label for="mtk">Input nilai matematika siswa ke-<?= $i ?></label>
        <input type="number" id="mtk" name="mtk[]" required>
        <label for="indo">Input nilai bahasa indonesia siswa ke-<?= $i ?></label>
        <input type="number" id="indo" name="indo[]" required>
        <label for="ingg">Input nilai bahasa inggris siswa ke-<?= $i ?></label>
        <input type="number" id="ingg" name="ingg[]" required>
        <label for="dpk">Input nilai DPK siswa ke-<?= $i ?></label>
        <input type="number" id="dpk" name="dpk[]" required>
        <label for="agama">Input nilai agama siswa ke-<?= $i ?></label>
        <input type="number" id="agama" name="agama[]" required>
        <label for="kehadiran">Input persentase kehadiran siswa ke-<?= $i ?></label>
        <input type="number" id="kehadiran" name="kehadiran[]" required>
        <br><hr><br>
        <?php endfor; ?>
        <button type="submit" name="submit">Submit</button>
      </form>

      <?php
        if(isset($_POST['submit'])){
          $mtk = $_POST['mtk'];
          $indo = $_POST['indo'];
          $ingg = $_POST['ingg'];
          $dpk = $_POST['dpk'];
          $agama = $_POST['agama'];
          $kehadiran = $_POST['kehadiran'];
          $nama = $_POST['nama'];

          $juara = [];
          for($i = 0; $i < count($mtk); $i++) {
            $totalNilai = $mtk[$i] + $indo[$i] + $ingg[$i] + $dpk[$i] + $agama[$i];

            if ($totalNilai >= 475 && $kehadiran[$i] >= 100) {
              $juara[] = $i+1;
            }
          }

          if(count($juara) > 0) {
            echo "Siswa yang menjadi juara kelas:<br>";
            foreach ($juara as $siswa) {
              echo "Siswa ke-$siswa<br>";
            }
          }else{
            echo "Tidak ada siswa yang menjadi juara kelas";
          }
        }
      ?>

    </div>
  </div>
    
    
</body>
</html>