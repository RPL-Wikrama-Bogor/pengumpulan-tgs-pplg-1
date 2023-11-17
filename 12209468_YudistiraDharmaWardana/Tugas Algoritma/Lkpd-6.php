<<<<<<< HEAD
<?php

$waktu;
$jam;
$menit;
$detik;
$hasil;

?>

=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
</head>
<body>

<h1>Lkpd Algoritma 6 </h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td><input type="text" name ="wkt"></td>
        </tr>
    </table>

    <button name="submit" method="post">Kirim</button>
</form>    

</body>
</html>

<?php

if(isset($_POST['submit'])){

$waktu = $_POST['wkt'];

if($waktu >3600){
    $jam = ($waktu/3600);
    $hasil = $jam ."jam" ;
}
elseif($waktu > 60){
    $menit = $waktu /60;
    $hasil2 = $menit ."menit";
}
$hasil3 = ($hasil ."detik");
echo "Hasil nya adalah : " .$hasil;
}
=======
    <title>Mengkonversi Detik ke Jam</title>
</head>
<body>
    <h1>LKPD ALGORITMA 6</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="waktu"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    
    <?php
    
    if (isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        
        if ($waktu >= 3600 && $waktu >= 60) {
            $count = $waktu % 3600;
            $jam = ($waktu - $count) / 3600;
            $count2 = $count % 60;
            $menit =($count - $count2) / 60;
            $detik = $count2;
            echo "Waktu = $jam Jam $menit Menit $detik Detik ";
        
        }
        else if ($waktu >= 60 && $waktu < 3600) {
            $jam = 0;
            $count2 = $waktu % 60;
            $menit =($waktu - $count2) / 60;
            $detik = $count2;
            echo "Waktu = $jam Jam $menit Menit $detik Detik ";
        }

        

        elseif ($waktu < 60) {
            $detik = $waktu;
            $jam = 0;
            $menit = 0;
            echo "Waktu = $jam Jam $menit Menit $detik Detik ";
        }
        
        
    }
    ?>
</body>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
