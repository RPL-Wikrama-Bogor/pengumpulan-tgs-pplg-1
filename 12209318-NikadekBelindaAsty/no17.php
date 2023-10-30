<!DOCTYPE html>
<html>
<head>
    <title>Nomor 17</title>
</head>
<body>

<h2>Input Bilangan</h2>

<form method="post">
    <?php
    for ($a = 1; $a <= 20; $a++) {
        echo "Bilangan ke-$a: <input type='number' name='angka[]'><br>";
    }
    ?>
    <br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if (isset($_POST['submit'])) {
    $angka = $_POST['angka'];
    
    $jumlah = count($angka);
    if ($jumlah == 0) {
        echo "Belum ada bilangan yang diinput.";
    } else {
        $terbesar = $angka[0];
        $terkecil = $angka[0];
        $total = 0;

        foreach ($angka as $bilangan) {
            if ($bilangan > $terbesar) {
                $terbesar = $bilangan;
            }
            if ($bilangan < $terkecil) {
                $terkecil = $bilangan;
            }
            $total += $bilangan;
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