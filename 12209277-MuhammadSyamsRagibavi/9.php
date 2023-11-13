<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p>Suhu Fahrenheit</p>
    <input type="number" name="fahrenheit">
    <button type="submit" name="submit"> Submit</button>
    <br>

    <?php 

    $fahrenheit;
    $celcius;

    
    if(isset($_POST['submit'])){
        $fahrenheit = $_POST['fahrenheit'];

        $celcius = $fahrenheit / 33.8;

        if($celcius > 300){
            echo( "Fahrenheit = " . $fahrenheit ." Celcius = " . $celcius . " Panas");
        }
        else if($celcius > 250){
            echo( "Fahrenheit = " . $fahrenheit ." Celcius = " . $celcius . " Dingin");
        }
        else{
            echo( "Fahrenheit = " . $fahrenheit ." Celcius = " . $celcius . " Normal");
        }


    }
    
    ?>
</form>
</body>
</html>