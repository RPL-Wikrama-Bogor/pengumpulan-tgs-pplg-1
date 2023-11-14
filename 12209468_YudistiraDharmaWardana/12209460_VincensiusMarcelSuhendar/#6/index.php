<?php
    $jam;
    $menit;
    $detik;
    $waktu;
    $sisa1;
    $sisa2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Detik ke Jam, Menit, dan Detik</title>
</head>
<body>

    <h2>Mengkonversi total Detik ke Bentuk Jam dan Menit</h2>

    <form method="post" action="#">
        <table>
            <tr>
                <td>Waktu</td>
                <td>   :   </td>
                <td><input type="number" name="waktu"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php
    // if (isset($_POST['submit'])) {

    //     $waktu = $_POST['waktu'];
    //     $jam = floor($waktu / 3600);
    //     $menit = floor(($waktu / 60) % 60);
    //     $detik = $waktu % 60;
        
    //     echo "$jam:$menit:$detik";
    // }
    // if($waktu > 60){
    //     $menit = floor($waktu / 60);
    //     $waktu = $waktu - ($menit * 60);
    //     $hasil .= $menit . "menit "; 
    // if($waktu > 0){
    //     $detik = $waktu;
    //     $hasil .= $detik. "detik ";
    // }
    // }
    if(isset($_POST['submit'])){
        $waktu = $_POST['waktu'];
        $hasil = 0;
        
        if($waktu > 3600){
        $jam = floor($waktu / 3600);
        $waktu = $waktu - ($jam * 3500);
        $hasil .= $jam . "jam ";    
    }
    if($waktu > 60){
        $menit = floor($waktu / 60);
        $waktu = $waktu - ($menit * 60);
        $hasil .= $menit . "menit "; 
    if($waktu > 0){
        $detik = $waktu;
        $hasil .= $detik. "detik ";
    }
        echo $hasil;
}
    }
    ?>
    
</body>
</html>