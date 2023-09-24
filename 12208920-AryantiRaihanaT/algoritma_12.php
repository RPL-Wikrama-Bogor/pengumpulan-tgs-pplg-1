<?php 

$hh;
$mm;
$ss;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu</title>
</head>
<body>
    <h1>Menampilkan Waktu</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="hh"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="mm"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="ss"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Tampilkan" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $hh = $_POST['hh'];
        $mm = $_POST['mm'];
        $ss = $_POST['ss'];

        $ss = $ss + 1;
        if($ss >= 60){
            $mm = $mm + 1;
            $ss = "00";

            if($mm >= 60){
                $hh = $hh + 1;
                $mm = "00";
                $ss = $ss;

                if($hh >= 24){
                    $hh = "00";
                    $mm = "00";
                    $ss = "00";
                }
            }
        }else{
            $ss = $ss;

        }

        echo "$hh : $mm : $ss";
    }

?>

</html>