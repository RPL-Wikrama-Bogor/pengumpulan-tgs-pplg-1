<?php

$waktu;
$jam;
$menit;
$detik;
$hasil;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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