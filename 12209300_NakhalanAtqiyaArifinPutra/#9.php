<?php
    $no_pegawai;
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

<style>
*,html{
    box-sizing: border-box;
    overflow: hidden;
    outline: 0;
}
body{
    background-image: url(assets/bg2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
}
.mk{
    max-width: 100%;
    position: absolute;
    align-items: center;
    justify-content: center;   
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 40px 10px;
    width: 50%;
    
    background-color: rgba(225,225,225,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}

.mk form button{
    width: 100%;
    margin-top: 10px;
    padding: 10px 0;
    border: none;
    background-color:#2979ff;
    font-size: 15px;
    color: #fafafa;
}
    h2{
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
 table{
    margin-left:auto;
    margin-right:auto;
}
.echo{
    max-width: 100%;
    font-size: 20px;
    font-family:'Times New Roman', Times, serif;
    color: #fafafa;
    width: 100%;
    height: 100%;
    background-color: rgba(109,219,240,.7);
    text-align: center;
}
.echo2{
    max-width: 100%;
    font-size: 30px;
    color: red;
    text-align: center;
    width: 100%;
    height: 10%;
    background-color:#F8DE22;
}
</style>


    <div class="mk">
    <h2>Kode Pegawai</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Masukan Kode Pegawai</td>
                <td>  :  </td>
                <td><input type="number" size="30" name="no_pegawai" autofocus placeholder="Kode Pegawai" autocomplete="off"></td>
            </tr>
        </table>
         <button type="submit" name="cari">Cari</button>
           
    </form>
    </div>
    <?php
        if (isset($_POST['cari'])) {
            $no_pegawai = $_POST ['no_pegawai'];
            $length = strlen($no_pegawai);

            if ($length >= 11) {
                $no_golongan = substr($no_pegawai, 0, 1);
                $tanggal = substr($no_pegawai, 1, 2);
                $bulan = substr($no_pegawai, 3, 2);
                $tahun = substr($no_pegawai, 5, 4);
                $no_urutan = substr($no_pegawai, 9, 2);

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
                echo "<div class='echo'>";
                echo "<p>Golongan  = $no_golongan</p>";
                echo "<p>Tanggal Lahir = $tangal_lahir</p>";
                echo "<p>Nomor Urut  = $no_urutan</p>";
                echo "</div>";
            }
            else {
                echo "<p class='echo2'>Kode Pegawai Tidak Sesuai</p>";
               
            }


        }
    ?>
</body>
</html>