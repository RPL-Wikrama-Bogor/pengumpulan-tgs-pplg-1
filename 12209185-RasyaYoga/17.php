<!-- preparation -->
<?php
$arrAngka;
$nilaiTerbesar;
$nilaiTerkecil;
$rataRata;
?>

<!-- input -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Max, Min, Ave</title>
</head>
<body>
    <form action="" method="post">
        <div id="wrap">
            <div style="display: flex;">
                <label for="angka">Masukan Angka</label>
                <input type="number" name="angka[]" id="angka">
             </div>
        </div>
    <p style="cursor: pointer; color:blue;" onclick= "tambahInput()">Tambah Input form</p>
    <button type="submit" name="submit">Kirim</button>
    </form>
    <script>
        let jumlahInput = 1;
        function tambahInput() {
        let inputElement = `
       <div style="display: flex;"> 
            <label for="angka"> Masukan angka : </label>
            <input type="number" name="angka[]" id="angka"> </input> 
        </div>
        `;
        jumlahInput += 1;
      if (jumlahInput < 10) {
            document.getElementById('wrap') .innerHTML += inputElement  ;
        }
    }
        
    </script>

    <?php 
    if(isset($_POST['submit'])) {
        $arrAngka = $_POST['angka'];
        $nilaiTerbesar = max($arrAngka);
        $nilaiTerkecil = min($arrAngka);
        $rataRata = array_sum($arrAngka) / count($arrAngka);
        echo "Nilai terbesar : ".$nilaiTerbesar."<br> Nilai Terkecil : ".$nilaiTerkecil."<br> Rata-rata : ".$rataRata;
    }
    ?>
</body>
</html>