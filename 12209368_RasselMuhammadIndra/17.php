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
                <!-- name dengan tanda [] berarti bahwa semua input dengan name yang sama, valueanya diambil semua 
                 dan disimpan dalam bentuk array -->
                <input type="number" name="angka[]" id="angka">
             </div>
        </div>
    <!-- atribut yang memiliki kata depan "on" disebut dengan event yang valuue nya berisi script
    (baris code js) -->
    <p style="cursor: pointer; color:blue;" onclick= "tambahInput()">Tambah Input form</p>
    <button type="submit" name="submit">Kirim</button>
    </form>
    <script>
        let jumlahInput = 1;
        function tambahInput() {
        // untuk mendefinisikan variable pada js menggunakan let/count : let untuk variabel yang bisa berubah valuenya, const variabel yang tidak bisa diubah value nya
        // backtip(``) digunakan untuk pembuatan string yang tidak, satu baris : bisa dugnakan di php juga 
        let inputElement = `
       <div style="display: flex;"> 
            <label for="angka"> Masukan angka : </label>
            <input type="number" name="angka[]" id="angka"> </input> 
        </div>
        `;
        jumlahInput += 1;
        // document : pengambil alihan barid kode html
        // getElementById : mengambil tag html yang memiliki id tersebut : selain itu, ada getElemetByClass, getElementByTgname, querySelector tergantung identitas yang akan diambil 
        if (jumlahInput < 10) {
            // kalau jumlah inputnya massi kurang dari 10, unout baru boleh dimuncul/tambahin
            // appendChild : menambahkan element/tag baru pada bagian bawah (sebelum penutup) tag yang dimaksud (yang dipanggi) pada "document."
            document.getElementById('wrap') .innerHTML += inputElement  ;
        }
    }
        
    </script>
    <!-- proses -->
    <?php 
    if(isset($_POST['submit'])) {
        // mengisi arrAngka dengan seluruh value dari input yang memiliki name angke
        $arrAngka = $_POST['angka'];
        $nilaiTerbesar = max($arrAngka);
        $nilaiTerkecil = min($arrAngka);
        // array_sum : seluruh item arr dijumlahkan, count : menghitung jumlah item yang terdapat pada array
        $rataRata = array_sum($arrAngka) / count($arrAngka);
        echo "Nilai terbesar : ".$nilaiTerbesar."<br> Nilai Terkecil : ".$nilaiTerkecil."<br> Rata-rata : ".$rataRata;
    }
    ?>
</body>
</html>