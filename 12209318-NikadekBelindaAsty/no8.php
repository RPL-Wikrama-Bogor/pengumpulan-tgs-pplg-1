<?php
$bilangan;
$satuan;
$puluhan;
$ratusan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nomor 8</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan : </td>
                <td></td>
                <td><input type="number" name="bil"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table><br>
    </form>
<?php
if(isset($_POST['submit'])){
    $bilangan = $_POST["bil"];
    $satuan = $bilangan % 10;
    $puluhan = ($bilangan / 10) % 10;
    $ratusan = floor($bilangan / 100); 
    // $ratusan = $bilangan / 100;

    echo "Satuan : " . $satuan;
    echo "<br>";
    echo "Puluhan : " . $puluhan;
    echo "<br>"; 
    echo "Ratusan : " . $ratusan;
    echo "<br>";
}
?>
</body>
</html>