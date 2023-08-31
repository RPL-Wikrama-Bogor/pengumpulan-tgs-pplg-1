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
    <link rel="stylesheet"  type="text/css"  href="style.css">
    <title>Document</title>
    <style>
        .input{
            background-color: #a7f3d0;
        }
    </style>
</head>
<body>
<h1>Mencari bilangan terbesar</h1>
<div class="input">
    <form action="" method="post">
        <table>
            <tr>
                <td>Input hh : </td>
                <td></td>
                <td><input type="number" name="jam"></td>
            </tr>
            <tr>
                <td>Input mm : </td>
                <td></td>
                <td><input type="number" name="menit"></td>
            </tr>
            <tr>
                <td>Input ss : </td>
                <td></td>
                <td><input type="number" name="detik"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table><br>
    </form> 
</div>
<?php
if(isset($_POST['submit'])){
    $hh = $_POST["jam"];
    $mm = $_POST["menit"];
    $ss = $_POST["detik"];
    $ss = $ss + 1;
    if($ss >= 60){
        $mm++ && $ss = 0;
        if($mm >= 60){
            $hh++ && $mm = 0; $ss = 0;
            if( $hh > 24){
                $hh = 0;
                $mm = 0;
                $ss = 0;
            }
        }
    }
    echo "$hh: $mm :$ss";
}
?>
</body>
</html>