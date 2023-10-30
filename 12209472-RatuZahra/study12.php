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
</head>
<body>

    <h2>Waktu</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Jam<input type="number" name="hh"></td>
                <td>Menit<input type="number" name="mm"></td>
                <td>Detik<input type="number" name="ss"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="selanjutnya"></td>
            </tr>
        </table>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $hh = $_POST["hh"];
            $mm = $_POST["mm"];
            $ss = $_POST["ss"];

            $ss = $ss + 1;

            if ($ss >=60) {
                $mm = $mm + 1;
                $ss = 00;
            }
            else {
                $ss = $ss;
            }
            if ($mm >= 60) {
                $hh = $hh + 1;
                $mm = 00;
                $ss = 00;

                if ($hh >=24) {
                    $hh = 00;
                    $mm = 00;
                    $ss = 00;
                }
            }

            echo " Pukul $hh: $mm: $ss";
        }
    ?>
    
</body>
</html>