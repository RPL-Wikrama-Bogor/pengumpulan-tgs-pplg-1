<?php

$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>No. Pegawai</td>
                <td>:
                <td><input type="number" name="pegawai"></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php 

if (isset($_POST['submit'])){
    $no_pegawai = $_POST['pegawai'];

    if($no_pegawai < 11){
        echo "no pegawai tidak sesuai";
    }

    $no_golongan = substr($no_pegawai,0,1);
    $tanggal = substr($no_pegawai,1,2);
    $bulan = substr($no_pegawai,3,2);
    $tahun = substr($no_pegawai,5,4);
    $no_urutan = substr($no_pegawai,9,2);

    if($bulan == "01"){
        echo $bulan." Januari";
    } else if ($bulan == "02"){
        echo $bulan." Februari";
    } else if ($bulan == "03"){
        echo $bulan." Maret";
    } else if ($bulan == "04"){
        echo $bulan." April";
    } else if ($bulan == "05"){
        echo $bulan." Mei";
    } else if ($bulan == "06"){
        echo $bulan." Juni";
    } else if ($bulan == "07"){
        echo $bulan." Juli";
    } else if ($bulan == "08"){
        echo $bulan. " Agustus";
    } else if ($bulan == "09"){
        echo $bulan. " September";
    } else if ($bulan == "10"){
        echo $bulan. " Oktober";
    } else if ($bulan == "11"){
        echo $bulan. " November";
    } else {
        echo $bulan. " Desember";
    }

    $tanggal_lahir = $tanggal  $bulan   $tahun;

    echo $no_golongan;
    echo "<br>";
    echo $tanggal_lahir;
    echo "<br>";
    echo $no_urutan;
}

?>

</html>