<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
    <style>
        .card {
            border: 0px;
            width: 540px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #E5B0EA;
             


        }

        body {
            background-color: #BD83CE;
        }

        @media (min-width: 576px) {
            .card {
                width: calc(50% - 6px);
            }

            h2 {
                font-size: 11px;
            }

            p {
                font-size: 10px;
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