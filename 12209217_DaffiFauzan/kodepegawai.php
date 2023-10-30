<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>kodepegawai</title>
</head>
<body>
    <form action="" method="post">
      <h1>Kode Pegawai</h1>
        <input type="number" name="kode" placeholder="kode">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        
    }
    
    ?>
=======
    <title>Kodepegawai.php</title>

    <style>

        * {
            font-family: Pangram-ExtraLight;
        }

        @font-face {
            font-family: Pangram-ExtraLight;
            src: url(font/PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Regular.otf);
        }
        
        body {
            background-image: linear-gradient(gray, white);
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        form {
            box-shadow: black 5px 5px 3px;
            display: flex;
            flex-direction: column;
            width: 400px;
            height: 400px;
            margin: 0 auto;
            border-radius: 10px;
            background: white;
            border: 1px solid black;
        }

        form .kolom input {
            width: 330px;
            padding: 20px;
            margin: 15px 15px;
            border: 2px solid gray;
            border-radius: 10px;
        }

        .kolom {
            margin: 0 auto;
        }

        .hasil{
            font-size: 25px;
            display: flex;
            box-shadow: black 5px 5px 3px;
            align-items: center;
            flex-direction: column;
            padding: 1rem;
            width: 25%;
            margin: 10px auto;
            border-radius: 10px;
            background: white;
            border: 1px solid black; 
        }

        button[type="submit"] {
            background-color: gray;
            color: #fff;
            padding:  1rem ;
            margin: auto 30px;
            border-radius: 5px;
            cursor: pointer;
            width: 85%;
        }

        @media (max-width: 768px) {
    body {
        margin: 0;
        padding: 0;
    }

    form {
        width: 87%;
        margin: 20px auto;
        margin-top: 10px;
        margin-left: 40px;
    }

    form .kolom input {
        width: 80%;
    }

    .hasil {
        width: 75%;
        margin: 60% auto;
        margin-left: 10px;
    }

    button[type="submit"] {
        width: 85%;
    }
}

@media (max-width: 1200px) {
    body {
        margin: 0 auto;
        padding: 0;
    }

    form {
        width: 40%;
        margin: 0 auto;
    }

    form .kolom input {
        width: 85%;
    }

    .hasil {
        width: 30%;
    }

    button[type="submit"] {
        width: 90%;
    }
}

    </style>

</head>
<body>
    <form method="post" action="#">     
    <h1 align="center">Kode Pegawai</h1>
    <div class="kolom">
    <input type="number" name="no_pegawai" value="g-dd-mm-yyyy">
    <button type="submit" name="submit">Submit</button>
    
    </form>
    </div>
    
    <?php
        if (isset($_POST['submit'])) {
            $no_pegawai = $_POST ['no_pegawai'];
            $length = strlen($no_pegawai);

            echo '<div class="hasil">';
            if ($length == 11) {
                $no_golongan = substr($no_pegawai, 0, 1);
                $tanggal = substr($no_pegawai, 1, 2);
                $bulan = substr($no_pegawai, 3, 2);
                $tahun = substr($no_pegawai, 5, 4);
                $no_urutan = substr($no_pegawai, 9, 2);
                
                switch ($bulan) {
                    case "01":
                        $bulan = "Januari";
                        break;
                    case "02":
                        $bulan = "Februari";
                        break;
                    case "03":
                        $bulan = "Maret";
                        break;
                    case "04":
                        $bulan = "April";
                        break;
                    case "05":
                        $bulan = "Mei";
                        break;
                    case "06":
                        $bulan = "Juni";
                        break;
                    case "07":
                        $bulan = "Juli";
                        break;
                    case "08":
                        $bulan = "Agustus";
                        break;
                    case "09":
                        $bulan = "September";
                        break;
                    case "10":
                        $bulan = "Oktober";
                        break;
                    case "11":
                        $bulan = "November";
                        break;
                    case "12":
                        $bulan = "Desember";
                        break;
                    
                    default:
                        echo "Kode tidak sesuai";
                }
                }
                else if ($length != 11) {
                    $no_golongan = "Error";
                    $tanggal = "Error";
                    $bulan = "Error";
                    $tahun = "Error";
                    $no_urutan = "Error";
                }
            
            
            $tangal_lahir = $tanggal." ". $bulan." ". $tahun;
                
                echo "Golongan  = $no_golongan";
                echo "<br>";
                echo "Tanggal Lahir = $tangal_lahir";
                echo "<br>";
                echo "Nomor Urut  = $no_urutan";
                echo "<br>";
                
            echo '</div>';     
        }
        ?>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</body>
</html>