<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <title>Konversi Waktu</title>
</head>
<body>
    <div class="box">
        <form method="POST" action="">
            <h1>Input Jam, Menit dan Detik.</h1>
            <table>
                <tr>
                    <td>Input Jam</td>
                    <td><input type="number" name="hh" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <tr>
                    <td>Input Menit</td>
                    <td>
                        <input type="number" name="mm" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;">
                    </td>
                </tr>
                <tr>
                    <td>Input detik</td>
                    <td><input type="number" name="ss" maxlength="2" onKeyPress="if( this.value.length == 2 ) return false;"></td>
                </tr>
                <td><input type="submit" value="Submit" name="submit"></td>
            </table>
            <?php
            
            if (isset($_POST['submit'])) {
                $hh = (int) $_POST['hh'];
                $mm = (int) $_POST['mm'];
                $ss = (int) $_POST['ss'];

                $ss = $ss + 1;

                if ($ss >= 60) {
                    $mm = $mm + 1;
                    $ss = 00;
                    if ($mm >= 60) {
                        $hh = $hh + 1;
                        $mm = 00;
                        $ss = 00;

                        if ($hh >= 24) {
                            $hh = 00;
                            $mm = 00;
                            $ss = 00;
                        }
                    }
                } else {
                    $ss = $ss;
                }
                
                echo "<br>","Digabung adalah ";
                echo "<span>". $hh . "</span>:";
                echo "<span>". $mm . "</span>:";
                echo "<span>". $ss . "</span>.";

                    }
            ?>    
        </form>
    </div>
</body>

</html>