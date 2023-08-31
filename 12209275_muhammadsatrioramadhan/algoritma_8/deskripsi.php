<!DOCTYPE html>
<html>

<head>
    <title>Hasil Deskripsi Angka</title>
</head>

<body>
    <h1>Hasil Deskripsi Angka</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Langkah 1: Menerima input dari formulir
        $bilangan = $_POST["bilangan"];

        // Langkah 2: Mengambil angka satuan, puluhan, dan ratusan
        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = ($bilangan / 100) % 10;

        // Langkah 3: Menampilkan hasil
        echo "Bilangan: $bilangan<br>";
        echo "Satuan: $satuan<br>";
        echo "Puluhan: $puluhan<br>";
        echo "Ratusan: $ratusan";
    }
    ?>
</body>

</html>