<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            min-height: 100vh;
            background: linear-gradient(45deg, gray, white);
        }

        h2 {
            width: 100%;
            height: 60px;
            justify-content: center;
            padding: 20px;
            display: flex;
            position: relative;
            clear: left;
        }

        .base {
            width: 100%;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            position: relative;
        }

        .form {
            width: 65%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form h3 {
            margin-top: 10px;
        }

        .form input[type='text'],
        .form input[type='number'] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        .form input[type='submit'] {
            background-color: grey;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .form input[type='submit']:hover {
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="base">
        <div class="form">

            <h2>Informasi Pegawai</h2>
            <form method="post" action="">
                Masukkan Nomor Pegawai (11 karakter): <input type="text" name="nomorPegawai" required max="11">
                <input type="submit" name="submit" value="Cari">
            </form>

            <?php
            function month($month)
            {
                switch ($month) {
                    case "01":
                        return "JANUARI";
                    case "02":
                        return "FEBRUARI";
                    case "03":
                        return "MARET";
                    case "04":
                        return "APRIL";
                    case "05":
                        return "MEI";
                    case "06":
                        return "JUNI";
                    case "07":
                        return "JULI";
                    case "08":
                        return "AGUSTUS";
                    case "09":
                        return "SEPTEMBER";
                    case "10":
                        return "OKTOBER";
                    case "11":
                        return "NOVEMBER";
                    case "12":
                        return "DESEMBER";
                    default:
                        return "Bulan tidak valid";
                }
            }

            if (isset($_POST['submit'])) {
                $nomorPegawai = $_POST['nomorPegawai'];

                if (strlen($nomorPegawai) == 11) {
                    $golongan = $nomorPegawai[0];
                    $date = substr($nomorPegawai, 1, 2);
                    $month = substr($nomorPegawai, 3, 2);
                    $year = substr($nomorPegawai, 5, 4);
                    $nomorUrut = substr($nomorPegawai, 9);

                    echo "<br>";
                    echo "Nomor Golongan: " . $golongan . "<br>";
                    echo "Tanggal Lahir: " . $date . " " . month($month) . " " . $year . "<br>";
                    echo "Nomor Urut: " . $nomorUrut;
                }
                else{
                    echo"Harap Input 11 Karakter";
                }
            }
            ?>

        </div>
    </div>
</body>

</html>