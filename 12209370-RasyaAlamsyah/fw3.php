<?php
   $bilangan_pertama;
   $bilangan_kedua;
   $bilangan_ketiga;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mencari bilangan terbesar</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>bilangan kesatu</td>
                <td>:</td>
                <td><input type="number" name="bil_1"></td>
            </tr>
            <tr>
                <td>bilangan kedua</td>
                <td>:</td>
                <td><input type="number" name="bil_2"></td>
            </tr>
            <tr>
                <td>bilangan ketiga</td>
                <td>:</td>
                <td><input type="number" name="bil_3"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit" id=></td>
            </tr>
        </table>


    </form>
</body>
<?php
    if (isset($_POST['submit'])){
        $bilangan_pertama = $_POST['bil_1'];
        $bilangan_kedua = $_POST['bil_2'];
        $bilangan_ketiga = $_POST['bil_3'];

      if($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga){
        echo"bilangan terbesar adalah" . $bilangan_pertama;
    }elseif($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga){
        echo"bilangan terbesar adalah" . $bilangan_kedua;
    }elseif($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua){
        echo"bilangan terbesar adalah" . $bilangan_ketiga;
    }elseif($bilangan_pertama == $bilangan_kedua){
        echo "Nilai yang besar adalah Bilangan pertama dan Kedua yaitu ".$bilangan_pertama;
    }elseif($bilangan_pertama == $bilangan_ketiga){
        echo "Nilai yang besar adalah Bilangan pertama dan ketiga yaitu ".$bilangan_ketiga;
    }elseif($bilangan_kedua == $bilangan_ketiga){
        echo "Nilai yang besar adalah Bilangan kedua dan ketiga yaitu ".$bilangan_kedua;
    }

    else { 
        echo "sama besar";
    }

}

?>
</html>