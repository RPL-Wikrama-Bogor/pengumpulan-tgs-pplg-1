<?php

// Bilangan pertama; 
// bilangan kedua ;
// bilangan ketiga;

$bilangan1;
$bilangan2;
$bilangan3;


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
                <td>Bilangan pertama </td>
                <td>:</td>
                <td><input type="text" name ="bilangan_ke1"></td>
            </tr>
            <tr>
                <td>Bilangan kedua </td>
                <td>:</td>
                <td><input type="text" name ="bilangan_ke2"></td>
            </tr>
            <tr>
                <td>Bilangan ketiga</td>
                <td>:</td>
                <td><input type="text" name ="bilangan_ke3"></td>
            </tr>
        </table>
        <button name="submit" method="post">Kirim</button>
    </form>

</body>
</html>

<?php

if(isset($_POST["submit"])){

    $bilangan1 = $_POST['bilangan_ke1'];
    $bilangan2 = $_POST['bilangan_ke2'];
    $bilangan3 = $_POST['bilangan_ke3'];
    

    if($bilangan1 > $bilangan2 && $bilangan1 > $bilangan3){
        echo"bilangan terbesar adalah: " .$bilangan1;
    }
    elseif($bilangan2 > $bilangan1 && $bilangan2 > $bilangan3){
        echo"bilangan terbesar adalah: " .$bilangan2;
    }
    elseif($bilangan3 > $bilangan2 && $bilangan3 > $bilangan1){
        echo"bilangan terbesar adalah: " .$bilangan3;
    }
    elseif($bilangan1 = $bilangan2){
        echo "yang tertinggi adalah bilangan ke-1: " .$bilangan1 , "dan yang tertinggi adalah bilangan ke-2: " .$bilangan2;
    }
    elseif($bilangan2 = $bilangan3){
        echo "yang tertinggi adalah bilangan ke-1: " .$bilangan2 , "dan yang tertinggi adalah bilangan ke-2: " .$bilangan3;
    }
    elseif($bilangan3 = $bilangan1){
        echo "yang tertinggi adalah bilangan ke-1: " .$bilangan3 , "dan yang tertinggi adalah bilangan ke-2: " .$bilangan1;
    }
}


