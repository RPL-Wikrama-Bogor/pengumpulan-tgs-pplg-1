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
            background-color: #F7E8F6;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: grey;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin-top: 8px;
            cursor: pointer;
            border-radius: 10%;
        }

        h2 {
            color: grey;
        }

        label {
            font-size: 20px;
        }

        @media screen and (max-width: 550px) {
            .card {
                padding: 8px;
            }

            label {
                padding: 5px;
            }
        }
    </style>
</head>

<body>
    <center>
        <div class="card">
            <table>
                <form action="tugas11.php" method="post">
                    <h2>Masukan kode pegawai terlebih dahulu!</h2>
                    <div class="input">
                        <tr>
                            <td><label for="no_pegawai">No. Pegawai : </label></td>
                            <td> <input type="number" name="no_pegawai" id="no_pegawai"></td>
                        </tr>
                    </div>
                    <tr>

                        <td><a href="tugas11.php"><button type="submit" name="submit">Cari</button></a></td>
                    </tr>

                </form>
            </table>
        </div>
    </center>
</body>

</html>