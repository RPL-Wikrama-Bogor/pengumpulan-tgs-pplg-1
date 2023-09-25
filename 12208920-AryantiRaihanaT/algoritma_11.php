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
    <title>Kode Pegawai</title>
</head>
<body>
    <h1>Kode Pegawai</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>No. Pegawai</td>
                <td>:</td>
                <td><input type="number" name="no_pegawai"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Cari" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $no_pegawai = $_POST['no_pegawai'];
        $length = strlen($no_pegawai);

        if($length < 11){
            echo "no pegawai tidak sesuai";
        }else{
            $no_golongan = substr($no_pegawai, 0 , 1);
            $tanggal = substr($no_pegawai, 1, 2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);
            
            if($bulan == "01"){
                $bulan = "Januari";
            }else if($bulan == "02"){
                $bulan = "Februari";
            }else if($bulan == "03"){
                $bulan = "Maret";
            }else if($bulan == "04"){
                $bulan = "April";
            }else if($bulan == "05"){
                $bulan = "Mei";
            }else if($bulan == "06"){
                $bulan = "Juni";
            }else if($bulan == "07"){
                $bulan = "Juli";
            }else if($bulan == "08"){
                $bulan = "Agustus";
            }else if($bulan == "09"){
                $bulan = "September";
            }else if($bulan == "10"){
                $bulan = "Oktober";
            }else if($bulan == "11"){
                $bulan = "November";
            }else if($bulan == "12"){
                $bulan = "Desember";
            }else{
                $bulan = "error";
            }

            $tanggal_lahir = $tanggal . " " . $bulan .  " " . $tahun;

            echo "No Golongan : $no_golongan <br>";
            echo "Tanggal Lahir : $tanggal_lahir <br>";
            echo "No Urutan : $no_urutan <br>";
        }

        
    }

?>

</html>