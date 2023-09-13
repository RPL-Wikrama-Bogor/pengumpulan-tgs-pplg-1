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
    <style>
        body{
        font-family: Arial, sans-serif;
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h2 {
            text-align: center;
            margin-bottom: 12px;
            margin-top: 11px;
            text-align: center;
            margin: 0 auto 20px;
            margin-top: 40px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .form2 {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 300px;
        }

        table {
            width: 100%;
        }
        table td {
            padding: 5px;
        }

        
        input{
            width: 80%;
            padding: 5px;
            border: 1px solid #f778b8;
            border-radius: 4px;
        }

        button{
       
            display: inline-block;
            padding: 2px 8px;
            color: white;
            opacity: 0.8;
            border: 1px solid #f778b8;
            border-radius: 4px;
            background-color: #f778b8;
            cursor: pointer;
            box-shadow: 0 5px #e04893;
        }

       
    </style>
</head>
<body>
   
    <form method="post" action="#">
        <table>
            <h2>Kode Pegawai</h2>
            <tr>
                <td> Maukan Kode Pegawai</td>
                <td>  :  </td>
                <td><input type="number" name="no_pegawai"></td>
            </tr>
            <tr>
               <td><button type="submit" name="submit">
                submit
               </button></td>
            </tr> 
        </table>
    </form>
    <div class="form2">
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

                        $tangal_lahir = $tanggal . $bulan . $tahun;
                        
                        echo "Golongan  = $no_golongan";
                        echo "<br>";
                        echo "Tanggal Lahir = $tangal_lahir";
                        echo "<br>";
                        echo "Nomor Urut  = $no_urutan";
                        echo "<br>";
                    }
                    else {
                        echo "Kode Pegawai Tidak Sesuai";
                    }
                }
            ?> 
    </div>

</body>
</html>

