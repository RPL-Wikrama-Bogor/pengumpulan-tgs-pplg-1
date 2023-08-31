<?php
$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bulan kelahiran</title>
    <style>
        body {
            background-color: #BD83CE;
        }

        .card {
            border: 0px;
            width: 570px;
            padding: 40px;
            border-radius: 15px;
            margin: 150px;
            background-color: #E5B0EA;
        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }


        button[type="submit"] {
            background-color: #C689C6;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;

        }

        h2 {
            color: #916DB3;
        }
    </style>
</head>

<body>
    <center>
        <div class="card">
            <form action="tugas11.php" method="post">
                <h2>Masukan kode pegawai terlebih dahulu!</h2>
                <div class="input">
                    <label for="no_pegawai"> No. Pegawai : </label>
                    <input type="number" name="no_pegawai" id="no_pegawai">
                </div>
                <br>
                <a href="tugas11.php"><button type="submit" name="submit">Cari</button></a>
            </form>
        </div>
    </center>
</body>

</html>