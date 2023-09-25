<?php

$n_mtk;
$n_pabp;
$n_dpk;
$r_r

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Lkpd Algoritma 3 </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nilai PABP</td>
                <td>:</td>
                <td><input type="text" name ="pabp"></td>
            </tr>
            <tr>
                <td>Nilai MTK</td>
                <td>:</td>
                <td><input type="text" name ="mtk"></td>
            </tr>
            <tr>
                <td>Nilai DPK</td>
                <td>:</td>
                <td><input type="text" name ="dpk"></td>
            </tr>
        </table>
        <button name="submit" method="post">Kirim</button>
    </form>

</body>
</html>

<?php

if(isset($_POST['submit'])){

$n_dpk = $_POST['dpk'];
$n_mtk = $_POST['mtk'];
$n_pabp = $_POST['pabp'];
$r_r = ($n_pabp + $n_mtk + $n_dpk) /3;

if($r_r <= 100 && $r_r >=80){
    echo"Grade A";
}
elseif($r_r <= 80 && $r_r >=75){
    echo"Grade B";
}
elseif($r_r <= 75 && $r_r >=65){
    echo"Grade C";
}
elseif($r_r <= 65 && $r_r >=45){
    echo"Grade D";
}
elseif($r_r <= 45 && $r_r >=0){
    echo"Grade E";
}
else{
    echo"Angka tidak memenuhi persyartaan";
}
    


}