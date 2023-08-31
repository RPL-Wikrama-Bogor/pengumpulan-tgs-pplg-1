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
    <title>Mengkonversi Waktu ke Detik</title>
</head>
<body>
    <center>
    <h1>Konversi Ke <label>Detik</label></h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Menit</td>
                <td>:</td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Detik</td>
                <td>:</td>
                <td><input type="number" name="detik"></td>
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
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];

        $jam = $jam * 3600;
        $menit = $menit * 60;
        $total = $jam + $menit + $detik;
        
        echo "<br> Total Detik = ". $total;
    }
    
    ?>
    </center>
</body>