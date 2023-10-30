<?php

    $total_gram;
<<<<<<< HEAD:12209472-RatuZahra/7.php
    $hrg_sblm;
    $diskon;
    $hrg_stlh;
=======
    $harga_sebelum;
    $diskon;
    $harga_setelah;

>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/7.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:12209472-RatuZahra/7.php
    <title>Soal 7</title>
</head>
<body>
    <h2>Menghitung Diskon</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Total Gram</td>
                <td>  :  </td>
                <td><input type="text" name="total_gram"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Harga"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $total_gram = $_POST['total_gram'];

        $hrg_sblm = 500 * $total_gram / 100;
        $diskon = 5 * $hrg_sblm / 100;
        $hrg_stlh = $hrg_sblm - $diskon;

        echo $hrg_sblm;
        echo "<br>";
        echo $diskon;
        echo "<br>";
        echo $hrg_stlh;
    }
    ?>
=======
    <title>Document</title>
</head>
<body>
    
   <form action="" method="post">

    <label for="">Input total gram :</label>
    <input type="number" name="total" id="">

    <br>
    <input type="submit" value="cari" name="submit">
   </form>

   <?php
    if(isset($_POST['submit'])){
        $total_gram = $_POST['total'];

        $harga_sebelum = 500 * $total_gram;
        $diskon = 5 * $harga_sebelum / 100;
        $harga_setelah = $harga_sebelum - $diskon;

        echo "Harga sebelum :$harga_sebelum </br>";
        echo "diskon        :$diskon </br>";
        echo "Harga Setelah :$harga_setelah </br>";
    }
   ?>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/7.php
</body>
</html>