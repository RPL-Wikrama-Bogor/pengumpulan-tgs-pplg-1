<?php
    $hh;
    $mm;
    $ss;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 12</title>
    <style>
        body{
            margin: 10px 15rem;
            background-color: #94A684;
        }
        
        h1{
            margin: 10px;
            padding: 3rem 7rem;
            border-radius: 10px;
        }

        form{
            padding: 30px;
            margin: 20px 10px;
            background-color: #AEC3AE;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1>Menampilkan data waktu setelah ditambahkan 1 detik</h1>
    
    <form method="post" action="#">
    <h2>Masukan Angka</h2>
    <table>
            <tr>
                <td>Jam</td>
                <td>  :  </td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td> : </td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td> : </td>
                <td><input type="number" name="ss"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hasil"></td>
            </tr>
        </table>
        <?php
        if (isset($_POST['submit'])) {
            $hh = $_POST["hh"];
            $mm = $_POST["mm"];
            $ss = $_POST["ss"];

            $ss = $ss + 1;

            if ($ss >=60) {
                $mm = $mm + 1;
                $ss = 0 . 0;

                if ($mm >= 60) {
                    $hh = $hh + 1;
                    $mm = 0 . 0;
    
                    if ($hh >=24) {
                        $hh = 0 . 0;
                        $mm = 0 . 0;
                        $ss = 0 . 0;
                    }
                }
            }
    ?>
    <div class="isi">
        <?php
            echo "$hh Jam $mm Menit $ss Detik";
        }
        ?>
    </div>
    </form>
</body>
</html>