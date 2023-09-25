<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
    <style>
        
        body {
            background: radial-gradient(#D0BFFF, #DFCCFB, #F7E8F6);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .card {
            border: 0px;
            width: 90%; 
            max-width: 500px;
            padding: 20px;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
        }
        
        @media screen and (max-width: 550px) {
            .card {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <center>
        <div class="card">
            <?php

            if (isset($_POST['submit'])) {
                $no_pegawai = $_POST['no_pegawai'];
                $no_pegawai = strval($no_pegawai);

                if (strlen($no_pegawai) !== 11) {
                    echo "No Pegawai Tidak Sesuai";
                } else {
                    $no_golongan = substr($no_pegawai, 0, 1);
                    $tanggal = substr($no_pegawai, 1, 2);
                    $bulan = substr($no_pegawai, 3, 2);
                    $tahun = substr($no_pegawai, 5, 4);
                    $no_urutan = substr($no_pegawai, 9, 2);

                    if ($bulan == "01") {
                        $bulan = "Januari";
                    } elseif ($bulan == "02") {
                        $bulan = "Februari";
                    } elseif ($bulan == "03") {
                        $bulan = "Maret";
                    } elseif ($bulan == "04") {
                        $bulan = "April";
                    } elseif ($bulan == "05") {
                        $bulan = "Mei";
                    } elseif ($bulan == "06") {
                        $bulan = "Juni";
                    } elseif ($bulan == "07") {
                        $bulan = "Juli";
                    } elseif ($bulan == "08") {
                        $bulan = "Agustus";
                    } elseif ($bulan == "09") {
                        $bulan = "September";
                    } elseif ($bulan == "10") {
                        $bulan = "Oktober";
                    } elseif ($bulan == "11") {
                        $bulan = "November";
                    } else {
                        $bulan = "Desember";
                    }

                    $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
                    echo "<center>Kode Pegawai : " . $no_pegawai . "<br>No Golongan : " . $no_golongan . "<br>Tanggal Lahir : " . $tanggal_lahir . "<br>No Urutan : " . $no_urutan . "</center>";
                }
            }
            ?>
        </div>
    </center>
</body>

</html>