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
<<<<<<< HEAD:12209472-RatuZahra/11.php
    <style>
        body{
            margin: 10px 15rem;
            background-color: #D8C4B6;
        }
        h2{
            text-align: center;
            background-color: #F5EFE7;
            margin: 10px;
            padding: 3rem 7rem;
            border-radius: 10px;
        }

        form{
            padding: 20px;
            margin: 20px 10px;
            background-color: #F5EFE7;
            border-radius: 10px;
        }
        .isi{
            background-color:  #F5EFE7;
            margin: 20px 10px;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h2>Kode Pegawai</h2>

    <form method="post" action="#">

<table>
=======
</head>
 <style>
    body {
            background-color: #96B6C5;
        }

        .card {
            border: 0px;
            width: 500px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #ADC4CE;
            shadow: 15px;
        
        }
        
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 15px;
        }


        button {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
        }

        h2 {
            color: #102C57;
        }

        label {
            font-size: 20px;
        }
 </style>
<body><center>
    <div class="card">
        
    <h2>Kode Pegawai</h2>

    <form method="post" action="#">
        <table>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/11.php
            <tr>
                <td>Kode Pegawai</td>
                <td>  :  </td>
                <td><input type="number" name="no_pegawai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="kirim"></td>
            </tr>
        </table>
<<<<<<< HEAD:12209472-RatuZahra/11.php
    </form>
=======
    </div>
    </form>
</center>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/11.php
    
    <?php
        if (isset($_POST['submit'])) {
            $no_pegawai = $_POST ['no_pegawai'];
            $length = strlen($no_pegawai);

            if ($length == 11) {
                $no_golongan = substr($no_pegawai, 0, 1);
                $tanggal = substr($no_pegawai, 1, 2);
                $bulan = substr($no_pegawai, 3, 2);
                $tahun = substr($no_pegawai, 5, 4);
                $no_urutan = substr($no_pegawai, 9, 2);

<<<<<<< HEAD:12209472-RatuZahra/11.php
                if ($tanggal <=31 && $tanggal >=1) {
                    $tanggal = $tanggal;
                }
                else {
                    $tanggal = "(error)";
                }

                if ($bulan == "01")

=======
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/11.php
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
<<<<<<< HEAD:12209472-RatuZahra/11.php
                }elseif ($bulan == "12") {
                    $bulan = "Desember";
                }else {
                   $bulan = "(error)";
                }

                $tangal_lahir = $tanggal." " .$bulan. " ". $tahun;
=======
                }else {
                   $bulan = "(error
                    <style>
                    </style>)";
                }

                $tangal_lahir = $tanggal. $bulan. $tahun;
                
                echo "Golongan  = $no_golongan";
                echo "<br>";
                echo "Tanggal Lahir = $tangal_lahir";
                echo "<br>";
                echo "Nomor Urut  = $no_urutan";
                echo "<br>";
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/11.php
            }
            else {
                echo "Kode Pegawai Tidak Sesuai";
            }
<<<<<<< HEAD:12209472-RatuZahra/11.php
        ?>

    <div class= "isi">
    <?php
            echo"Kode Pegawai= $no_pegawai";
            echo "<br>";
            echo "Golongan Pegawai= $no_golongan";
            echo "<br>";
            echo "Tanggal Lahir = $tangal_lahir";
            echo "<br>";
            echo "Nomor Urut  = $no_urutan";
            echo "<br>";
        }
    ?>
        </div>
=======


        }
    ?>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/11.php
</body>
</html>