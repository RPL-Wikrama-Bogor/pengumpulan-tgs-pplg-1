<?php

$jam;
$menit;
$detik;
$total;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lkpd Algoritma 5 </h1>
<form action="" method="post">
    <table>
        <tr>
            <td>Jam</td>
            <td>:</td>
            <td><input type="text" name ="Jm"></td>
        </tr>
        <tr>
            <td> Menit </td>
            <td>:</td>
            <td><input type="text" name ="mnt"></td>
        </tr>
        <tr>
            <td> Detik </td>
            <td>:</td>
            <td><input type="text" name ="dtk"></td>
        </tr>
    </table>

    <button name="submit" method="post">Kirim</button>
</form>    

</body>
</html>


<?php

if(isset($_POST['submit'])){

    $jam = $_POST['Jm'];
    $menit = $_POST['mnt'];
    $detik = $_POST['dtk'];


    $jam = $jam * 3600;
    $menit = $menit* 60;
    $total = $jam + $menit + $detik;

    echo "Hasil nya adalah : " .$total;

}