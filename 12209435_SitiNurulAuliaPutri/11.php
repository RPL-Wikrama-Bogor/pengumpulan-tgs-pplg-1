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
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

     body{
            display: flex;
            justify-content: center;
            min-height: 100vh;
            height : 100%;
            align-items: center;
            background-image: url("asets/img-6.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

    .container{
            border: 3px bold;
            background-color: #FFFFFF;
            float: center;
            border:8px solid #3F2305;
            border-radius: 5px;
            box-shadow: 5px 5px 5px #3C486B;
            display: flex;
            padding: 5px;

    }

    .content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            width: 100%;
            padding: 20px;

        }

        button{
            background-color: #A4907C;
            color: #F0F0F0;
            border-radius: 3px;
            float: right;
            display: flex;
            position: right;
            padding: 5px;

        }

        h3{
            margin: 0;
            color: #765827;
            font-family: 'Libre Baskerville', serif;
            font-size: 25px;
            text-shadow: 3px 3px 3px #F2EAD3;
            position: center;
            width: 100%;
            text-align: center;
        }

        input{
          float : right;
          margin: 0;
          display: flex;
        }

        label{
          float: left;
          margin-right: 10px;
          display: flex;
        }

    /* Ukuran layar mobile phone minimal resolusi 576px */
    @media (min-width: 576px) { 
        .body{
            width: calc(50% - 6px);
        }
    }

    /* Ukuran layar tablet minimal resolusi 768px */
    @media (min-width: 768px) { 
        .body{
            width: calc(100vw / 3 - 12px);
        }
    }

    /* Ukuran layar dekstop minimal resolusi 992px */
    @media (min-width: 992px) { 
        .body{
            width: calc(100vw / 4 - 18px);
        }
    }

    /* Ukuran layar besar minimal resolusi 1200px */
    @media (min-width: 1200px) { 
        .body{
            width: calc(100vw / 5 - 24px);
        }
    }

    /* Ukuran layar sangat besar minimal resolusi 1400px */
    @media (min-width: 1400px) {
        h2{
            font-size: 20px;
        }
        p{
            font-size: 18px;
        }
    }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h3>- Kode Kepegawaian -</h3><br>
            <form method="post" action="#"> <br>
                <table>
                    <tr>
                        <td>Kode Pegawai</td>
                        <td>  :  </td>
                        <td><input type="number" name="no_pegawai"></td>
                        
                    </tr>
                    
                </table><br>
                <button type="submit" name="submit">Submit</button> <br><br>
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

                        $tangal_lahir = $tanggal. $bulan. $tahun;
                        
                        echo "<br>";
                        echo "<h4><b>Rincian kode kepegawaian anda adalah </b></h4><br>";
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
            </form>
        </div>
    </div>
</body>
</html>
