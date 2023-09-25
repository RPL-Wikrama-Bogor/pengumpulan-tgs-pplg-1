<?php 

$td;
$j;
$m;
$d;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Konversi Total Detik</title>
</head>
<body>
    <h1>Konversi Total Detik</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Total Detik</td>
                <td>:</td>
                <td><input type="number" name="td"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Konversi" name="submit"></td>
            </tr>
        </form>
    </table>
</body>

<?php 

    if(isset($_POST['submit'])) {
        $td = $_POST['td'];

        $j = floor($td / 3600);
        $sisa = floor($td % 3600);
        $m = floor($sisa / 60);
        $d = floor($sisa % 60);

        echo  "$j Jam $m Menit $d Detik";
    }

?>

</html>









<!-- <?php 

// $waktu;
// $j;
// $m;
// $d;
// $hasil;

?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Total Detik</title>
</head>
<body>
    <h1>Konversi Total Detik</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Total Detik</td>
                <td>:</td>
                <td><input type="number" name="waktu"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Konversi" name="submit"></td>
            </tr>
        </form>
    </table>
</body>
</html> -->
<!-- <?php 

    // if(isset($_POST['submit'])) {
    //     $waktu = $_POST['waktu'];

    //     if($waktu > 3600){
    //         $j = $waktu / 3600;
    //         $waktu = $waktu - ($j * 3600);
    //         $hasil += $j + "jam";
            
    //     }
        
    //     if($waktu > 60){
    //         $m = $waktu / 60;
    //         $waktu = $waktu - ($m * 60);
    //         $hasil += $m + "menit";
        
    //         $d = $waktu;
    //         $hasil += $d + "detik";
            
    //     }
        
    //     echo $hasil;
    // }

?> -->
