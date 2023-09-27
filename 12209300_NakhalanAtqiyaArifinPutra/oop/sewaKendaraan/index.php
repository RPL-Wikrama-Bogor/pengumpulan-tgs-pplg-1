
<?php

class Motor{
    public $Scooter = 70000;
    public $Motorsport = 80000;
    public $Touring = 90000; 
    public $Motorcross = 100000;
    public $diskon = 0.05;
}
$members = [
    [
        "nama" => "Vincent",
        "status" => "member",
    ],

    [
        "nama" => "Rasya",
        "status" => "member",
    ],

    [
        "nama" => "Samsudin",
        "status" => "member",
    ],
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Be+Vietnam+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Epilogue">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Sewa kendaraan bermotor</title>
</head>
<body>
    <div class="card">
        <div class="card-body">

            <form action="" method="post">
                <p>Nama Pelanggan</p>
                <input aria-required type="text" name="nama" required>
                <p>Lama Waktu Rental - Per Hari</p>
                <input aria-required type="number" name="daily" required>
                <p>Jenis Motor:</p>
                <select name="type">
                    <option hidden>-----------Select-----------</option>
                    <option aria-required value="Scooter">Scooter [Rp. 70.000]</option>
                    <option aria-required value="Motorsport">Motorsport [Rp. 80.000]</option>
                    <option aria-required value="Touring">Motorsport Touring [Rp. 90.000]</option>
                    <option aria-required value="Motorcross">Motorcross [Rp. 100.000]</option>
                </select> <br><br>
                <button type="submit" name="submit">Submit</button>
                </form>
        </div>
    </div> 
    <div class="card">
        <div class="card-body">
            <div class="hasil">
        <?php
            class Sewa extends Motor{
                
                public function count($price, $total)
                {   
                    $final = 10000 + $price * $total;
                    echo "Jenis motor yang dirental adalah: ". $_POST['type'] . " selama " . $_POST['daily'] ." hari<br>";
                    echo "Harga rental per harinya adalah Rp. " . number_format($price, 0, ',', '.') .  " dengan pajak Rp. 10.000.<br>";
                    echo "Final Price : Rp.  " . number_format($final, 0, ',', '.');
                }
                public function diskon($price, $total)
                {   
                    $final = $price * $total - ($price * $total * $this->diskon);
                    echo "Jenis motor yang dirental adalah: ". $_POST['type'] . " selama " . $_POST['daily'] ." hari<br>";
                    echo "Harga rental per harinya adalah Rp. " . number_format($price, 0, ',', '.') .  " dengan diskon member 5%!<br>";
                    echo "Final Price : Rp.  " . number_format($final, 0, ',', '.');
                }
            }
            ?>
        </div>
    </div>  
 </div>
</body>
<?php
if(isset($_POST['submit'])){
    
    $type = $_POST['type'];
    $daily = $_POST['daily'];

    $bike = new Sewa();
    switch($type){
        case "Scooter":
            $price = $bike->Scooter;
            break;
        case "Motorsport":
            $price = $bike->Motorsport;
            break;
        case "Touring":
            $price = $bike->Touring;
            break;
        case "Motorcross":
            $price = $bike->Motorcross;
            break;
        default:
            $price = 0;
            break;
    }

    $name = $_POST['nama'];
    $namina = array_search($name, array_column($members, 'nama'));
    // !== bakalan ngecek tipe data, jika == saja maka tidak akan mengecek tipedata 
    if($namina !== false && isset($members[$namina]['status'])) {

        echo "<div class='style'>".$members[$namina]['nama'] . " adalah member! Dapat diskon 5%!<br>"."</div>";
        echo $bike->diskon($price, $daily);
      }
      else {
        echo $name . " bukan member" . "<br>";
        echo $bike->count($price, $daily);
     }
}
?>
<style>
    .style{
        font-weight: bold;
    }
</style>
</html>
