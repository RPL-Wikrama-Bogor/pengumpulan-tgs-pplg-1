<?php
    $no__pegawai;
    $length;
    $no_golongan;
    $tanggal;
    $bulan;
    $tahun;
    $no_urutan;
    $tangal_lahir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 11</title>
</head>
<body>
    <div class="container">
    <b>Kode Pegawai</b>
    <form method="post" action="#">
                <input type="number" name="no__pegawai" class="nmbr">
<br>    
            <input type="submit" name="submit" value="kirim" class="clk">
    </form>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            $no__pegawai = $_POST ['no__pegawai'];
            $length = strlen($no__pegawai);

            if ($length == 11) {
                $no_golongan = substr($no__pegawai, 0, 1);
                $tanggal = substr($no__pegawai, 1, 2);
                $bulan = substr($no__pegawai, 3, 2);
                $tahun = substr($no__pegawai, 5, 4);
                $no_urutan = substr($no__pegawai, 9, 2);

                if ($bulan == "01") {
                    $bulan = "Januari";
                }elseif ($bulan == "02") {
                    $bulan = "Februari";
                }elseif ($bulan == "03") {
                    $bulan = "Maret";
                }elseif ($bulan == "04") {
                    $bulan = "April";
                }elseif ($bulan == "05") {
                    $bulan = "Mei";
                }elseif ($bulan == "06") {
                    $bulan = "Juni";
                }elseif ($bulan == "07") {
                    $bulan = "Juli";
                }elseif ($bulan == "08") {
                    $bulan = "Agustus";
                }elseif ($bulan == "09") {
                    $bulan = "September";
                }elseif ($bulan == "10") {
                    $bulan = "Oktober";
                }elseif ($bulan == "11") {
                    $bulan = "November";
                }elseif ($bulan == "12") {
                    $bulan = "Desember";
                }else {
                   $bulan = "(error)";
                }

                $tangal_lahir = $tanggal. $bulan. $tahun;
                
                echo"<script>alert('Golongan  = $no_golongan');</script>";
                echo "<br>";
                echo"<script>alert('Tanggal Lahir  = $tangal_lahir');</script>";
                echo "<br>";
                echo"<script>alert('NOmor Urut = $no_urutan');</script>";
                echo "<br>";

            }
            else {
                echo"<script>alert('tidak sesuai');
                </script>";
            }


        }
    ?>
</body>
</html>

<style>
body{
display:flex;
justify-content:center;
align-items:center;
height:600px;
background-color:#618264;
color:#D0E7D2;
}
.container{
    background-color:#79AC78;
    padding:10px;
    border-radius:10px;
    text-align:center;
}
.nmbr{
    margin:10px;
    border-radius:5px;
    width:250px;
    height:40px;
    font-size:30px
}
.clk{
    width:150px;
    height:30px;
    border-radius:10px;
    font-size:20px;
    color:#D0E7D2;
}
input{
    background-color:#B0D9B1;
}
</style>