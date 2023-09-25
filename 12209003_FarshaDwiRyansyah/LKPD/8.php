<?php
<<<<<<< HEAD:12209472-RatuZahra/8.php

=======
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/8.php
    $bilangan;
    $satuan;
    $puluhan;
    $ratusan;
?>
<<<<<<< HEAD:12209472-RatuZahra/8.php

=======
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/8.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:12209472-RatuZahra/8.php
    <title>Soal 8</title>
</head>
<body>
    <h2>Mengkoverensi Bilangan Bulat Menjadi Ratusan, Puluhan, dan Satuan</h2>

    <form method="post" action="">
        <tr>
            <td> Masukan Bilangan</td>
            <td>  :  </td>
            <td><input type="number" name="bilangan"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Hitung"></td>
        </tr>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];

        $satuan = $bilangan % 10;
        $puluhan = ($bilangan / 10) % 10;
        $ratusan = ($bilangan / 100) % 100;

        echo "satuan $satuan <br>";
        echo "puluhan $puluhan <br>";
        echo "ratusan $ratusan";

    }
    ?>
    
</body>
=======
    <title>Algoritma 8</title>
</head>
    <body>
    <h1>Algoritma 8</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Input Bilangan</td>
                <td>:</td>
                <td><input type="number" name="bil"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php
 if(isset($_POST['submit'])) {
    $bilangan = $_POST['bil'];

    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = ($bilangan / 100) %10;

    echo $satuan. " satuan " . $puluhan . " puluhan " . $ratusan . " ratusan ";
 }
?>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/8.php
</html>