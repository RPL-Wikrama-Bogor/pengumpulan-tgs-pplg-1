<?php

    $npabp;
    $nmtk;
    $ndpk;
    $rata;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade nilai </title>
</head>
<body>
    <h1>Grade nilai </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>PABP</td>
                <td>:</td>
                <td><input type="number" name="npabp" placeholder="input nilai"></td>
            </tr>
            <tr>
                <td>MTK</td>
                <td>:</td> 
                <td><input type="number" name="nmtk" placeholder="input nilai"></td>
            </tr>
            <tr>
                <td>DPK</td>
                <td>:</td>
                <td><input type="number" name="ndpk" placeholder="input nilai"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
    $npabp = $_POST['npabp'];
    $nmtk = $_POST['nmtk'];
    $ndpk = $_POST['ndpk'];

    $rata = ($ndpk + $nmtk + $npabp) / 3;
    
    if ($rata <= 100 && $rata >= 80){
        echo "Grade A";
    }
    elseif ($rata <= 80 && $rata >= 75){
        echo "Grade B";
    }
    elseif ($rata <= 75 && $rata >= 65){
        echo "Grade C";
    }
    elseif ($rata <= 65 && $rata >= 45){
        echo "Grade D";
    }
    elseif ($rata <= 45 && $rata >= 0){
        echo "Grade E";
    }
    else {
        echo "Tidak memenuhi persyaratan";
    }

}

?>