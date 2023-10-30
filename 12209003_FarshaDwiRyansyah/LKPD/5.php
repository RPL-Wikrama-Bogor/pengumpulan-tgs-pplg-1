<?php
<<<<<<< HEAD:12209472-RatuZahra/5.php

=======
    $satjam;
    $satmen;
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/5.php
    $jam;
    $menit;
    $detik;
    $total;
?>
<<<<<<< HEAD:12209472-RatuZahra/5.php

=======
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/5.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:12209472-RatuZahra/5.php
    <title>Soal 5</title>
</head>
<body>
  <h2> Menghitung Total Detik</h2>  

  <form method="post" action="#">
    <table>
        <tr>
            <td>Jam</td>
            <td> : </td>
            <td><input type="text" name="jam"></td>
        </tr>
        <tr>
            <td>Menit</td>
            <td> : </td>
            <td><input type="text" name="menit"></td>
        </tr>
        <tr>
            <td>Detik</td>
            <td> : </td>
            <td><input type="text" name="detik"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Total" id="">
            </td>
        </tr>
    </table>
  </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];
        $total;

        $jam = $jam * 3600;
        $menit = $menit * 60;
        $total = $jam + $menit + $detik;

        echo "Total Detik adalah $total";
    }
    ?>

</body>
=======
    <title>Konversi Waktu</title>
</head>
    <body>
    <h1>Konversi Waktu</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jm"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mnt"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="dtk"></td>
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
    $satjam = $_POST['jm'];
    $satmen = $_POST['mnt'];
    $detik = $_POST['dtk'];

    $jam = $satjam * 3600;
    $menit = $satmen * 60;
    $total = $jam + $menit + $detik;

    echo $satjam. " jam " . $satmen . " menit " . $detik . " detik " . "tersebut jika dikonversi ke detik menjadi " . $total . " detik";
 }
?>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/5.php
</html>