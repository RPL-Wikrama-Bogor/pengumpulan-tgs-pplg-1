<?php 
    $gram;
    $sebeharga;
    $disc;
    $seteharga;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga</title>
</head>
<body>
<h1>Belanja</h1>
    <form action="" method="post">
    <table>
            <tr>
                <td>Input Berat</td>
                <td>:</td>
                <td><input type="number" name="gram"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $gram = $_POST['gram'];

        $sebeharga = 500 * $gram;
        $disc = 5 * $sebeharga /100;
        $seteharga = $sebeharga - $disc;

        echo $sebeharga . " " . $disc . " ". $seteharga;
    }