<<<<<<< HEAD:12209472-RatuZahra/6.php
<?php

    $jam = 0;
    $menit = 0;
    $detik = 0;
    $total = 0;
    $sisa1 = 0;
    $sisa2 = 0;
?>

=======
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/6.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD:12209472-RatuZahra/6.php
    <title>Soal 6</title>
</head>
<body>

    <h2>Mengkonversi Total Detik ke Bentuk Jam dan Menit</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Waktu</td>
                <td>   :   </td>
                <td><input type="text" name="total"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $total = $_POST['total'];
        if ( $total >= 3600) {

            $sisa1= $total % 3600;
            $jam = ($total - $sisa1) / 3600;
            
            if ($total >= 60 ) {
                $sisa2 = $sisa1 % 60;
                $menit = ($sisa1 - $sisa2) / 60;

                $detik = $sisa2;
            }
            else {
                $detik = $sisa1;
            }
        }

        elseif ($total >= 60) {
            $sisa1 = $total % 60;
            $menit = ($total - $sisa1) / 60;

            $detik = $sisa1;
        }

        else {
            $detik = $total;
        }

        echo "$jam jam $menit menit $detik detik";
    }
    ?>
    
=======
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="" method="post">
    <p>Detik</p>
    <input type="number" name="total">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $jam;
    $menit;
    $detik;
    $total;
    
    if(isset($_POST['submit'])){
        $total = $_POST['total'];

        $jam = $total / 3600;

        $total %= 3600;

        $menit = $total / 60;

        $detik = $total % 60;

        echo("Jam = " . floor($jam));
        echo("<br/>");
        echo("Menit = " . floor($menit));
        echo("<br/>");
        echo("Detik = " . $detik);
    }
    
    ?>
</form>
>>>>>>> 6c3ebe7cfdd59ac7f31c63444159ebefe282bd6b:12209003_FarshaDwiRyansyah/LKPD/6.php
</body>
</html>