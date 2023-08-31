<style>
    label{
        color: #4477CE;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengkonversi Detik ke Jam</title>
</head>
<body>
    <center>
    <h1>Detik Ke <label>Jam</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="number" name="waktu"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    
    <?php
    
    if (isset($_POST['submit'])) {
        $waktu = $_POST['waktu'];
        
        if ($waktu > 3600 && $waktu > 60) {
            $count = $waktu % 3600;
            $jam = ($waktu - $count) / 3600;
            $count2 = $count % 60;
            $menit =($count - $count2) / 60;
            $detik = $count2;
            echo "Waktu = $jam Jam $menit Menit $detik Detik ";
        
        }
        else if ($waktu >= 60 && $waktu < 3600) {
            $jam = 0;
            $count2 = $waktu % 60;
            $menit =($waktu - $count2) / 60;
            $detik = $count2;
            echo "Waktu = $jam Jam $menit Menit $detik Detik ";
        }

        

        elseif ($waktu < 60) {
            $detik = $waktu;
            $jam = 0;
            $menit = 0;
            echo "Waktu = $jam Jam $menit Menit $detik Detik ";
        }
        
        
    }
    
    ?>
    </center>
</body>