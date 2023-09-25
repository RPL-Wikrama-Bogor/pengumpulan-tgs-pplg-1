<?php
$suhu_fahrenheit;
$suhu_celcius;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuaca</title>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
    <label for="suhu_fahrenheit">Masukan Suhu</label>
    <input type="number" name="suhu_fahrenheit" id="suhu_fahrenheit">
    </div>
    <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html> 

<?php
    if(isset($_POST['submit'])){
        $suhu_fahrenheit = $_POST['suhu_fahrenheit'];

        $suhu_celcius = $suhu_fahrenheit - 32 / 1.8;

    if($suhu_celcius > 300) {
        echo "Panas";
    } else if ($suhu_celcius < 250) {
        echo "dingin";
    } else {
        echo "normal";
    }
    }