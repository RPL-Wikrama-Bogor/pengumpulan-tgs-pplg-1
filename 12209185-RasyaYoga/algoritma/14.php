<!DOCTYPE html>
<html>
<head>
    <title>Mencetak Bilangan Ganjil 1 sampai 50</title>
</head>
<body>

<h2>Mencetak Bilangan Ganjil 1 sampai 50</h2>

<?php
for ($angka = 1; $angka <= 50; $angka++) {
    if ($angka % 2 != 0) {
        echo $angka . "<br>";
    }
}
?>

</body>
</html>