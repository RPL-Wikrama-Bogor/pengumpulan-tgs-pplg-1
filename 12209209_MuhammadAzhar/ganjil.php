<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan 1-50 Ganjil saja</title>
</head>
<body>
    <h1>Mencetak 1 sampai 50 </h1>
    <?php
    
    $angka = 1;

    while ($angka <= 50) {
        if ($angka % 2 == 1) {
        echo "Angka = $angka <br>";  
        }
        $angka = $angka + 1;
    }
    
    ?>
</body>
</html>