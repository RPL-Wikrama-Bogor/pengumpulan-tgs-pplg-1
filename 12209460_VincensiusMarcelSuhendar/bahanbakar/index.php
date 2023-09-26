<?php

class Shell{
    public  $Super = 15420,
            $VPower = 16130,
            $Diesel = 18310,
            $Nitro = 16510,
            $PPN = 0.10;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Fuel Purchase </title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <p>Please enter the amount of fuel in litres:</p>
            <input aria-required type="number" name="liter">
        <p>Select fuel type:</p>
        <select name="fuel">
            <option hidden>-----------Select-----------</option>
            <option aria-required ="Shell Super">Shell Super</option>
            <option aria-required value="Shell V-Power">Shell V-Power</option>
            <option aria-required value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option aria-required value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select> <br><br>
        <button type="submit" name="submit">Confirm Purchase</button>
        </form>
    </div>
    <div class="out">
        <?php
            class Beli extends Shell{

                public function count($price, $total)
                {   

                    $final = $price * $total + ($price * $total * $this->PPN);
                    echo "You've bought: : ". $_POST['fuel'] . "<br>";
                    echo "for.. $total Litres.<br>";
                    echo "Final Price : Rp.  " . number_format($final, 0, ',', '.');
                }
            }
        ?>
    </div>
</body>
<?php
if(isset($_POST['submit'])){
    $fuel = $_POST['fuel'];
    $total = $_POST['liter'];

    $benzene = new Beli();
    switch($fuel){
        case "Shell Super":
            $price = $benzene->Super;
            break;
        case "Shell V-Power":
            $price = $benzene->VPower;
            break;
        case "Shell V-Power Diesel":
            $price = $benzene->Diesel;
            break;
        case "Shell V-Power Nitro":
            $price = $benzene->Nitro;
            break;
        default:
            $price = 0;
            break;
    }
    echo $benzene->count($price, $total);

}
?>

</html>