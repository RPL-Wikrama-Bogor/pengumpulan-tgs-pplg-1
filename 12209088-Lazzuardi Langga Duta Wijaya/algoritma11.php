<?php

$no_pegawai;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
<<<<<<< HEAD
         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    </style>
=======
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #96B6C5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>No. Pegawai</td>
                <td>:
                <td><input type="number" name="pegawai"></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="hitung" name="submit"></td>
            </tr>
        </table>
<<<<<<< HEAD
    </form>
=======
        <?php

    if (isset($_POST['submit'])) {
        $no_pegawai = $_POST['pegawai'];

        if ($no_pegawai < 11) {
            echo "no pegawai tidak sesuai";
        } else {
            $no_golongan = substr($no_pegawai, 0, 1);
            $tanggal = substr($no_pegawai, 1, 2);
            $bulan = substr($no_pegawai, 3, 2);
            $tahun = substr($no_pegawai, 5, 4);
            $no_urutan = substr($no_pegawai, 9, 2);

            $monthNames = array(
                1 => 'JAN', 2 => 'FEB', 3 => 'MAR', 4 => 'APR', 5 => 'MEI', 6 => 'JUN',
                7 => 'JUL', 8 => 'AGU', 9 => 'SEP', 10 => 'OKT', 11 => 'NOV', 12 => 'DES'
            );
            $monthName = $monthNames[(int)$bulan];

            echo "Nomor Golongan: " . $no_golongan . "<br>";
            echo "Tanggal Lahir: " . $tanggal . " " . $monthName . " " . $tahun . "<br>";
            echo "Nomor Urut: " . $no_urutan;
        }
    }



    ?>
    </form>
    
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
</body>

</html>


<<<<<<< HEAD
<?php
  
if (isset($_POST['submit'])) {
    $no_pegawai = $_POST['pegawai'];

    if ($no_pegawai < 11) {
        echo "no pegawai tidak sesuai";
    } else {
        $no_golongan = substr($no_pegawai, 0, 1);
        $tanggal = substr($no_pegawai, 1, 2);
        $bulan = substr($no_pegawai, 3, 2);
        $tahun = substr($no_pegawai, 5, 4);
        $no_urutan = substr($no_pegawai, 9, 2);

        $monthNames = array(
            1 => 'JAN', 2 => 'FEB', 3 => 'MAR', 4 => 'APR', 5 => 'MEI', 6 => 'JUN',
            7 => 'JUL', 8 => 'AGU', 9 => 'SEP', 10 => 'OKT', 11 => 'NOV', 12 => 'DES'
        );
        $monthName = $monthNames[(int)$bulan];

        echo "Nomor Golongan: " . $no_golongan . "<br>";
        echo "Tanggal Lahir: " . $tanggal . " " . $monthName . " " . $tahun . "<br>";
        echo "Nomor Urut: " . $no_urutan;
    }
}


?>
=======
>>>>>>> de281eeaed3c9f909df4fefc5f1841e25f6426e6
