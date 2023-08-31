<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak 1 sampai 50 (Ganjil - Genap)</title>
</head>
<body>
    <h1>Mencetak 1 -> 50 menggunakan For and While</h1>
    <?php
    
    $angka = 1;

    while ($angka <= 50) {
        if ($angka % 2 == 0) {
        echo "Angka = $angka Genap <br>";
        }
        elseif ($angka % 2 == 1) {
            echo "Angka = $angka Ganjil <br>";
        }
        
        $angka = $angka + 1;
    }
    
    ?>
</body>
</html>