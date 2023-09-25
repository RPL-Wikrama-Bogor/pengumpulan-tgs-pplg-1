<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 19</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <style>
    *{
      color: black;
    }
    
    body{
            display: flex;
            justify-content: center;
            min-height: 100vh;
            height : 100%;
            align-items: center;
            background-image: url("asets/img-1.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

    .container{
      border: 3px bold;
            background-color: #F0F0F0;
            float: center;
            border: 2px solid black;
            border-radius: 5px;
            box-shadow: 5px 5px 5px #3C486B;
            display: flex;

    }

    .content{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            width: 100%;
            padding: 20px;

        }

        button{
            background-color: #3C486B;
            color: #F0F0F0;
            border-radius: 3px;
            float: right;
            display: flex;

        }

        h3{
            margin: 0;
            color: #3C486B;
            font-family: 'Libre Baskerville', serif;
            font-size: 25px;
            text-shadow: 3px 3px 3px #ababab;
            position: center;
            width: 100%;
            text-align : center;
        }

        input{
          float : right;
          margin: 0;
          display: flex;
        }

        label{
          float: left;
          margin-right: 10px;
          display: flex;
        }
    
        /* Ukuran layar mobile phone minimal resolusi 576px */
        @media (min-width: 576px) { 
            .body{
                width: calc(50% - 6px);
            }
        }

        /* Ukuran layar tablet minimal resolusi 768px */
        @media (min-width: 768px) { 
            .body{
                width: calc(100vw / 3 - 12px);
            }
        }

        /* Ukuran layar dekstop minimal resolusi 992px */
        @media (min-width: 992px) { 
            .body{
                width: calc(100vw / 4 - 18px);
            }
        }

        /* Ukuran layar besar minimal resolusi 1200px */
        @media (min-width: 1200px) { 
            .body{
                width: calc(100vw / 5 - 24px);
            }
        }

        /* Ukuran layar sangat besar minimal resolusi 1400px */
        @media (min-width: 1400px) {
            h2{
                font-size: 20px;
            }
            p{
                font-size: 18px;
            }
        }
  </style>
</head>
<body>
  <div class="container">
    <div class="content">
      <h3>- Penjualan Tiket -</h3><br><br>

    <form action="" method="post">
      <table>
        <tr>
          <td><label for="vip">Input penjualan tiket VIP</label> </td>
          <td><input type="number" name="vip" id="vip"required></td>
        </tr>
        <tr>
          <td><label for="eks">Input penjualan tiket Eksekutif</label></td>
          <td><input type="number" name="eksekutif" id="eks" required></td>      
        </tr>
        <tr>
          <td><label for="eko">Input penjualan tiket Ekonomi</label></td>
          <td><input type="number" name="ekonomi" id="eko" required> </td>
        </tr>
      </table> <br> <br>
          <button type="submit" name="submit">Submit</button>
    </form>
    <?php

$tiketVip = 50;
$tiketEksekutif = 50;
$tiketEkonomi = 50;

if(isset($_POST['submit'])){
  $vip = $_POST['vip'];
  $eksekutif = $_POST['eksekutif'];
  $ekonomi = $_POST['ekonomi'];

  if($vip >= 35 && $vip <=50){
    $untungVip = 25;
  }elseif($vip >= 20 && $vip < 35){
    $untungVip = 15;
  }elseif($vip < 20 && $vip > 0){
    $untungVip = 5;
  }else{
    echo "Tidak Valid";
  }

  if($eksekutif >= 40 && $eksekutif <=50){
    $untungEksekutif = 20;
  }elseif($eksekutif >= 20 && $eksekutif < 40){
    $untungEksekutif = 10;
  }elseif($eksekutif < 20 && $eksekutif > 0){
    $untungEksekutif = 2;
  }else{
    echo "Tidak Valid";
  }

  if($ekonomi > 0 && $ekonomi <= 50){
    $untungEkonomi = 7;
  }else{
    echo "Tidak Valid";
  }

  echo "<h2> List keuntungan </h2> <br>";
  echo "Keuntungan tiket VIP = " . $untungVip . "% <br>";
  echo "Keuntungan tiket Eksekutif = " . $untungEksekutif . "% <br>";
  echo "Keuntungan tiket Ekonomi = " . $untungEkonomi . "% <br>";
  echo "Keuntungan keseluruhan = " . $untungVip + $untungEksekutif + $untungEkonomi . "% <br> <br>";
  echo "Jumlah tiket VIP = " . $vip . "<br>";
  echo "Jumlah tiket Eksekutif = " . $eksekutif . "<br>";
  echo "Jumlah tiket Ekonomi = " . $ekonomi . "<br>";
  echo "Jumlah keseluruhan tiket = " . $vip + $eksekutif + $ekonomi;
}

?>
    </div>
  </div>
</body>
</html>