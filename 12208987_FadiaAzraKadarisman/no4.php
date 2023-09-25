<?php
    $tunj;
    $pjk;
    $gb;
    $gp;
    $nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
</head>
<body>
<form action="" method="post">
    <h1>Hitung Gaji</h1>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><input type="number" name="gp"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $gp = $_POST['gp'];
        
        $tunj = (20*$gp)/100;
        $pjk = (15*($gp + $tunj))/100;
        $gb = $gp + $tunj - $pjk;

        echo $nama . " ". $tunj. " ".$pjk . " ".$gb;
    }