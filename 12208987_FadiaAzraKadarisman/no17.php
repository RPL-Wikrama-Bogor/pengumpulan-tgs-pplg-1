<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<h2>Input</h2>

<form method="post">
    <?php
    for ($i = 1; $i <= 20; $i++) {
        echo "Bilangan ke-$i: <input type='number' name='bil[]' required ><br>";
    }
    ?>
    <br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if (isset($_POST['submit'])) {
    $bil = $_POST['bil'];
    
    $jumlah = count($bil);
    if ($jumlah == 0) {
        echo "Belum ada bil yang diinput.";
    } else {
        $terbesar = $bil[0];
        $terkecil = $bil[0];
        $total = 0;

        foreach ($bil as $angka) {
            if ($angka > $terbesar) {
                $terbesar = $angka;
            }
            if ($angka < $terkecil) {
                $terkecil = $angka;
            }
            $total += $angka;
        }

        $avg = $total / $jumlah;

        echo "<h2>Hasil:</h2>";
        echo "Bilangan Terbesar: $terbesar<br>";
        echo "Bilangan Terkecil: $terkecil<br>";
        echo "Rata-rata: $avg<br>";
    }
}
?>

</body>
</html>