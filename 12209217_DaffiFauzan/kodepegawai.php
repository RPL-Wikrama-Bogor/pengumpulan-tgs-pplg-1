<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodepegawai.php</title>

    <style>

        * {
            font-family: Pangram-ExtraLight;
        }

        @font-face {
            font-family: Pangram-ExtraLight;
            src: url(font/PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Regular.otf);
        }

        form {
            box-shadow: black 5px 5px 3px;
            display: flex;
            flex-direction: column;
            width: 450px;
            height: 400px;
            margin-top: 50px;
            margin-left: 450px;
            border-radius: 10px;
            background: white;
            border: 1px solid black;
        }

        form .kolom input {
            width: 330px;
            padding: 20px;
            margin: 15px;
            margin-top: 20px;
            border: 2px solid gray;
            border-radius: 10px;
        }

        .kolom {
            margin-left: 30px;
            margin-top: 30px;
        }

        .hasil{
            font-size: 30px;
            display: flex;
            box-shadow: black 5px 5px 3px;
            text-align: center;
            flex-direction: column;
            width: 450px;
            height: 400px;
            margin-top: 50px;
            margin-left: 450px;
            border-radius: 10px;
            background: white;
            border: 1px solid black; 
        }

        button[type="submit"] {
            background-color: gray;
            color: #fff;
            padding: 10px 20px;
            margin-bottom: 15px;
            margin-top: 17px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 15px;
            width: 85%;
            transition: 0.5s;
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
        
           
        
        

</body>
</html>