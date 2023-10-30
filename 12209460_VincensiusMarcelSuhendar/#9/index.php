<?php

$suhu_fahrenheit;
$suhu_celcius;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suhu</title>
</head>
<body>
    <form action="" method="post">
        <p>Input suhu dalam Fahrenheit.</p>
        <table>
            <tr>
                <td><input type="number" name="fahrenheit" value="Suhu dalam *F"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

<?php

if(isset($_POST['submit'])){
    $suhu_fahrenheit = $_POST['fahrenheit'];
    
    $suhu_celcius = $suhu_fahrenheit / 33.8;
}

if($suhu_celcius > 300){
    echo "Panas!";
}
elseif($suhu_celcius > 250){
    echo "Dingin!";
}
else{
    echo "Normal.";
}

?>

</html>